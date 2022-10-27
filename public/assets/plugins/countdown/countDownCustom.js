function countDownDeal() {
    const timecoundown = document.querySelectorAll("[rs-countdown]");
    if (timecoundown.length == 0) {
        return false;
    }
    timecoundown.forEach(function (element) {
        const timeElement = setInterval(function () {
            var timeStart = element.dataset.start;
            var timeEnd = element.dataset.end;
            var dataStart = getValueTime(timeStart);
            var dataEnd = getValueTime(timeEnd);
            var startEventTime = new Date(dataStart.dateTimeArray[0]);
            var endEvent = new Date(dataEnd.dateTimeArray[0]);
            startEventTime = startEventTime.setHours(
                dataStart.hours,
                dataStart.minutes,
                dataStart.seconds
            );
            endEvent = endEvent.setHours(
                dataEnd.hours,
                dataEnd.minutes,
                dataEnd.seconds
            );
            var now = new Date();
            now = now.getTime();
            timeStart = startEventTime - now;
            timeEnd = endEvent - now;

            var days = Math.floor(timeEnd / (1000 * 60 * 60 * 24));
            if (days > 0) {
                days = days + 1;
            }
            var hours = Math.floor(
                (timeEnd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );

            var minutes = Math.floor(
                (timeEnd % (1000 * 60 * 60)) / (1000 * 60)
            );
            var seconds = Math.floor((timeEnd % (1000 * 60)) / 1000);
            window.dispatchEvent(
                new CustomEvent(
                    "countdown.time.rs." + element.getAttribute("rs-countdown"),
                    {
                        detail: {
                            days,
                            hours: hours < 10 ? "0"+hours : hours,
                            minutes: minutes < 10 ? "0"+minutes : minutes,
                            seconds: seconds < 10 ? "0"+seconds : seconds,
                        },
                    }
                )
            );
            if (timeEnd <= 0) {
                if (element.hasAttribute("rs-countdown-end")) {
                    CLICK.callFunction(element.dataset.func);
                }
                clearInterval(timeElement);
            }
        }, 1000);
    });
}

function getValueTime(dateTime) {
    var dateTimeArray = dateTime.split(" ");
    var hourMinuteSecond = dateTimeArray[1].split(":");
    var hours = hourMinuteSecond[0];
    var minutes = hourMinuteSecond[1];
    var seconds = hourMinuteSecond[2];
    return { dateTimeArray, hourMinuteSecond, hours, minutes, seconds };
}

function callFunction(func, options = []) {
    try {
        var arrayFunc = func.split(".");
        if (
            arrayFunc.length === 1 &&
            null != window[arrayFunc[0]] &&
            typeof window[arrayFunc[0]] === "function"
        ) {
            return (
                null != window[arrayFunc[0]] &&
                typeof window[arrayFunc[0]] === "function" &&
                window[arrayFunc[0]](...options)
            );
        } else if (arrayFunc.length === 2) {
            var obj = arrayFunc[0];
            func = arrayFunc[1];
            const classEval =
                typeof eval(`${obj}`) === "object"
                    ? eval(`${obj}`)
                    : eval(`new ${obj}()`);
            if (
                typeof classEval === "object" &&
                typeof classEval[func] === "function"
            ) {
                return (
                    typeof classEval[func] === "function" &&
                    classEval[func](...options)
                );
            } else if (
                window[obj] === "object" &&
                typeof window[obj][func] === "function"
            ) {
                return (
                    window[obj] === "object" &&
                    typeof window[obj][func] === "function" &&
                    window[obj][func](...options)
                );
            }
        }
    } catch (err) {
        console.log(err);
        alert(
            "Sửa lại data-success, Chưa đúng định dạng Object Function hoặc Class Function"
        );
    }
}

function handleEventCountDown() {
    const timecoundown = document.querySelectorAll("[rs-countdown]");
    timecoundown.forEach((item) => {
        const type = item.getAttribute("rs-countdown");
        window.addEventListener("countdown.time.rs." + type, (e) => {
            const listItems = document.querySelectorAll(
                `[item-of-rs-countdown="${type}"]`
            );
            listItems.forEach((item) => {
                const typeShow = item.getAttribute("type-of-rs-countdown");
                if (`${typeShow}` in e.detail) {
                    item.innerHTML = e.detail[typeShow];
                }
            });
        });
    });
}

window.addEventListener("DOMContentLoaded", function () {
    handleEventCountDown();
    countDownDeal();
});
