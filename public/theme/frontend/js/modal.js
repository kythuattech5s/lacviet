var MORE_FUNCTION = (function(){
	var showModal = function(element){
		var modal_id = element.getAttribute('data-modal');
		var modal = document.getElementById(modal_id);
		modal.classList.toggle("active");
	}
	var closeModal = function(){
		var button_close_modal = document.querySelectorAll('button[button_close_modal]');
		button_close_modal.forEach(function(item) {
			item.addEventListener('click',function() {
				var _this = this;
				_this.closest('div[modal]').classList.remove('active');
			});
		});
		window.onclick = function(event) {
			var modal = document.querySelectorAll('div[modal]');
			modal.forEach(function(elm){
				if(event.target == elm){
					elm.classList.remove('active');
				}
			})
			
		}
	}

	return{
		init:function(){
			closeModal();
		
			
		},
		showModal:function(element){
			showModal(element);
		},
		
	}
})();
MORE_FUNCTION.init();