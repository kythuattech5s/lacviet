<?php
$name = FCHelper::er($table, 'name');
$default_code = FCHelper::er($table, 'default_code');
$default_code = json_decode($default_code, true);
$default_code = @$default_code ? $default_code : [];
$defaultData = FCHelper::er($table, 'default_data');
$defaultData = json_decode($defaultData, true);
$defaultData = @$defaultData ? $defaultData : [];
$value = '';
$dataFormContact = collect();

if ($actionType == 'edit' || $actionType == 'copy') {
    if (count($defaultData) > 0) {
        $table_form = $defaultData['table'];
        $field_table = $defaultData['field_target_table'];
        $filed_target_id = $defaultData['field_target_id'];
        $field_main = $defaultData['field_content'];
        $dataFormContact = DB::table($defaultData['table'])
            ->where($field_table, $table->parent_name)
            ->where($filed_target_id, $dataItem->id)
            ->get();
    }
    if ($name != 'price' && $name != 'price_sale') {
        $value = FCHelper::er($dataItem, $name);
    } else {
        $value = $dataItem->$name;
    }
}

$forms = DB::table('forms')->get();
?>
<div class="form-group">
    <p class="form-title" for="">{{ FCHelper::er($table, 'note') }} <span class="count"></span></p>
    <textarea name="{{ $name }}" style="display:none" id="" cols="30" rows="10"></textarea>
    <div class="list-form-details" style="display:none; gap:8px">
        @foreach ($forms as $form)
            <p style="padding:4px 10px; border:1px solid #263238; cursor: pointer;" attribute="{{ $form->attribute }}" tag="{{ $form->tag }}">{{ $form->name }}</p>
        @endforeach
    </div>
    <div list-form-contact="{{ $name }}">
        @foreach ($dataFormContact as $data)
            @php
                $contentData = json_decode($data->content, true);
            @endphp
            <div class="item-element" style="border: 1px solid rgb(0, 0, 0); padding: 10px; margin: 10px 0px; display: flex; flex-direction: column; gap: 8px; position: relative;">
                <div class="list-form-details" style="display: flex; gap: 8px;">
                    @foreach ($forms as $form)
                        <p style="padding:4px 10px; border:1px solid #263238; cursor: pointer;" attribute="{{ $form->attribute }}" tag="{{ $form->tag }}">{{ $form->name }}</p>
                    @endforeach
                </div>
                <input data-main="name" placeholder="Nh???p t??n form" class="form-control" style="padding: 8px;" value="{{ $data->name }}">
                <input data-main="code" placeholder="Nh???p m?? c???a form (&quot;Kh??ng ???????c tr??ng&quot;)" value="{{ $data->code }}" class="form-control" style="padding: 8px;">
                <div class="item-form-contact" style="border: 1px solid rgb(0, 0, 0); padding: 8px; display: flex; flex-direction: column; gap: 6px;">
                    @foreach ($contentData as $contentItem)
                        @include('vh::ctedit.form_contact.' . $contentItem['tag'], ['data' => $contentItem])
                    @endforeach
                </div>
                <i class="fa fa-times close-item" style="position: absolute; top: 10px; right: 10px; cursor: pointer; padding: 8px; background-color: red; color: white;"></i>
            </div>
        @endforeach
    </div>
    <button type="button" class="create-form-contact btn btn-primary" data-name="{{ $name }}">T???o form</button>
</div>
<script type="text/javascript">
    class FormContact {
        constructor(element, name, isNew = true) {
            this.inputMain = document.querySelector(`textarea[name=${name}]`);
            this.element = element;
            this.element.className = "item-element";
            this.listMain = document.querySelector("[list-form-contact]");
            //show danh s??ch input
            if (isNew) {
                this.init();
            } else {
                this.selectorCode = this.element.querySelector('[data-main="name"]');
                this.selectorName = this.element.querySelector('[data-main="code"]');
                console.log(this.selectorCode,this.selectorName);
                this.listInputOfItem = this.element.querySelector('.list-form-details');
                this.selectorCode.onchange = this.handleEventInputDuplicate;
                this.selectorName.onchange = this.handleEventInputDuplicate;
                this.listInputOfItem.style.display = 'flex';
                this.listInput = this.listInputOfItem.querySelectorAll('p');
                this.listInputOfForm = this.element.querySelector('.item-form-contact');
                this.handleEventInput();
                this.buildData();
                this.closeItem();
            }
            this.chooseListInput();
        }

        closeItem = () => {
            const buttonCloses = this.element.querySelectorAll('i');
            buttonCloses.forEach(item => {
                item.onclick = () => {
                    item.parentElement.remove()
                    this.buildData();
                };
            })
        }

        handleEventInput = () => {
            const inputElements = this.element.querySelectorAll('[data-field]');
            inputElements.forEach(input => {
                input.onchange = (e) => {
                    this.buildData();
                }
            })
        }
        handleEventInputDuplicate = (e) => {
            this.buildData();
        }
        chooseListInput = () => {
            this.listInput.forEach((input, index) => {
                input.onclick = () => {
                    const attribute = input.getAttribute('attribute');
                    const tag = input.getAttribute('tag');
                    const listAttribute = attribute.split(',');
                    const selectCloseItem = document.createElement('i');
                    selectCloseItem.onclick = () => {
                        selectCloseItem.parentElement.remove();
                        this.handleEventInput();
                        this.buildData();
                    };
                    selectCloseItem.className = "fa fa-times";
                    Object.assign(selectCloseItem.style, {
                        position: "absolute",
                        top: "10px",
                        right: "10px",
                        cursor: "pointer",
                        padding: "8px",
                        backgroundColor: "red",
                        color: "white"
                    });

                    const divItem = document.createElement('div');
                    divItem.className = "item-group";
                    Object.assign(divItem.style, {
                        display: "flex",
                        flexDirection: "column",
                        gap: "4px",
                        border: "1px solid #000000",
                        padding: "6px",
                        position: "relative"
                    })

                    switch (tag) {
                        case 'input':
                            divItem.append(selectCloseItem);
                            this.listInputOfForm.append(divItem);
                            divItem.insertAdjacentHTML('beforeend', `
                                <label for="">Nh???p th??ng tin</label>
                                <input type="hidden" data-field="tag" value="${tag}">
                                <input type="text" class="form-control"data-field="label" placeholder="Ti??u ????? input" />
                            `)
                            listAttribute.forEach(attribute => {
                                divItem.insertAdjacentHTML('beforeend', `<input type="text" class="form-control" data-field="${attribute}" placeholder="Nh???p ${attribute}">`);
                            })
                            break;
                    }
                    this.handleEventInput();
                }
            })
        }

        addStyleElement = () => {
            Object.assign(this.element.style, {
                border: '1px solid #000000',
                padding: '10px',
                margin: "10px 0",
                display: "flex",
                flexDirection: "column",
                gap: "8px",
                position: "relative",
            });
        }
        init = () => {
            this.addStyleElement();
            // L???y danh s??ch input
            const listForm = document.querySelector(".list-form-details");
            const contentListForm = listForm.outerHTML;

            // T???o list Input Contact
            this.listInputOfForm = document.createElement('div');
            this.listInputOfForm.className = "item-form-contact";
            Object.assign(this.listInputOfForm.style, {
                border: "1px solid #000000",
                padding: "8px",
                display: "flex",
                flexDirection: "column",
                gap: "6px"
            });

            //Append danh s??ch Input
            this.element.insertAdjacentHTML('beforeend', contentListForm);

            //T???o ti??u ????? c???a ListInputForm
            this.selectorName = document.createElement('input');
            this.selectorName.setAttribute('data-main', 'name');
            this.selectorName.setAttribute("placeholder", "Nh???p t??n form");
            this.selectorName.className = "form-control";
            this.selectorName.onchange = this.handleEventInputDuplicate;
            Object.assign(this.selectorName.style, {
                padding: "8px",
            });

            this.element.append(this.selectorName);
            // T???o code c???a ListInputForm 

            this.selectorCode = document.createElement('input');
            this.selectorCode.setAttribute('data-main', 'code');
            this.selectorCode.setAttribute("placeholder", 'Nh???p m?? c???a form ("Kh??ng ???????c tr??ng")');
            this.selectorCode.className = "form-control";
            Object.assign(this.selectorCode.style, {
                padding: "8px",
            });
            this.selectorCode.onchange = this.handleEventInputDuplicate;
            this.element.append(this.selectorCode);
            this.element.append(this.listInputOfForm);

            this.listInputOfItem = this.element.querySelector('.list-form-details');
            this.listInputOfItem.style.display = 'flex';
            this.listInput = this.listInputOfItem.querySelectorAll('p');

            //Append n??t x??a 
            this.closeForm = document.createElement('i');
            this.closeForm.className = "fa fa-times close-item";
            Object.assign(this.closeForm.style, {
                position: "absolute",
                top: "10px",
                right: "10px",
                cursor: "pointer",
                padding: "8px",
                backgroundColor: "red",
                color: "white"
            });

            this.element.append(this.closeForm);
            this.closeForm.onclick = () => this.element.remove();
            //Append danh s??ch form

            this.listMain.append(this.element);
            this.handleEventInput();
            this.buildData();
        }

        buildData = () => {
            this.dataForm = [];
            const listElement = this.listMain.querySelectorAll(".item-element");
            listElement.forEach(element => {
                const objectItem = {
                    content: []
                };
                const inputMain = element.querySelectorAll('[data-main]');
                const listGroupItem = element.querySelectorAll('.item-group');
                inputMain.forEach(inputMain => {
                    objectItem[inputMain.getAttribute('data-main')] = inputMain.value;
                });

                listGroupItem.forEach(itemGroup => {
                    const objectItemGroup = {};
                    const dataOfGroup = itemGroup.querySelectorAll('input[data-field]');
                    dataOfGroup.forEach(inputField => {
                        objectItemGroup[inputField.getAttribute('data-field')] = inputField.value;
                    })
                    objectItem.content.push(objectItemGroup);
                })
                this.dataForm.push(objectItem);
            })
            this.inputMain.innerHTML = JSON.stringify(this.dataForm);
        }
    }

    function init() {
        const listFormContact = document.querySelector('[list-form-contact]');
        if (!listFormContact) return;
        const listItem = listFormContact.querySelectorAll(".item-element");
        listItem.forEach(item => {
            new FormContact(item, listFormContact.getAttribute('list-form-contact'), false);
        })
    }
    init();

    function createFormContact() {
        const buttonCreateFormContact = document.querySelector('.create-form-contact');
        if (!buttonCreateFormContact) return;

        buttonCreateFormContact.onclick = () => {
            const div = document.createElement('div');
            new FormContact(div, buttonCreateFormContact.dataset.name);
        }
    }

    createFormContact();
</script>
