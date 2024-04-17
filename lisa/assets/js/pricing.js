
//討論區
document.querySelector('.chat[data-chat=person2]').classList.add('active-chat')
document.querySelector('.person[data-chat=person2]').classList.add('active')

let friends = {
    list: document.querySelector('ul.people'),
    all: document.querySelectorAll('.left .person'),
    name: ''
  },
    chat = {
    container: document.querySelector('#tabButtons-pane-3 .container .right'),
    current: null,
    person: null,
    name: document.querySelector('#tabButtons-pane-3 .container .right .top .name')
  };
  

friends.all.forEach(f => {
  f.addEventListener('mousedown', () => {
    f.classList.contains('active') || setAciveChat(f)
  })
});

function setAciveChat(f) {
  friends.list.querySelector('.active').classList.remove('active')
  f.classList.add('active')
  chat.current = chat.container.querySelector('.active-chat')
  chat.person = f.getAttribute('data-chat')
  chat.current.classList.remove('active-chat')
  chat.container.querySelector('[data-chat="' + chat.person + '"]').classList.add('active-chat')
  friends.name = f.querySelector('.name').innerText
  chat.name.innerHTML = friends.name
}
//
$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title='Simple DataTable';
	// DataTable initialisation
	
	//Add row button
	$('.dt-add').each(function () {
		$(this).on('click', function(evt){
			//Create some data and insert it
			var rowData = [];
			var table = $('#example').DataTable();
			//Store next row number in array
			var info = table.page.info();
			rowData.push(info.recordsTotal+1);
			//Some description
			rowData.push('New Order');
			//Random date
			var date1 = new Date(2016,01,01);
			var date2 = new Date(2018,12,31);
			var rndDate = new Date(+date1 + Math.random() * (date2 - date1));//.toLocaleDateString();
			rowData.push(rndDate.getFullYear()+'/'+(rndDate.getMonth()+1)+'/'+rndDate.getDate());
			//Status column
			rowData.push('NEW');
			//Amount column
			rowData.push(Math.floor(Math.random() * 2000) + 1);
			//Inserting the buttons ???
			rowData.push('<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-danger btn-xs dt-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>');
			//Looping over columns is possible
			//var colCount = table.columns()[0].length;
			//for(var i=0; i < colCount; i++){			}
			
			//INSERT THE ROW
			table.row.add(rowData).draw( false );
			//REMOVE EDIT AND DELETE EVENTS FROM ALL BUTTONS
			$('.dt-edit').off('click');
			$('.dt-delete').off('click');
			//CREATE NEW CLICK EVENTS
			$('.dt-edit').each(function () {
				$(this).on('click', function(evt){
					$this = $(this);
					var dtRow = $this.parents('tr');
					$('div.modal-body').innerHTML='';
					$('div.modal-body').append('Row index: '+dtRow[0].rowIndex+'<br/>');
					$('div.modal-body').append('Number of columns: '+dtRow[0].cells.length+'<br/>');
					for(var i=0; i < dtRow[0].cells.length; i++){
						$('div.modal-body').append('Cell (column, row) '+dtRow[0].cells[i]._DT_CellIndex.column+', '+dtRow[0].cells[i]._DT_CellIndex.row+' => innerHTML : '+dtRow[0].cells[i].innerHTML+'<br/>');
					}
					$('#myModal').modal('show');
				});
			});
			$('.dt-delete').each(function () {
				$(this).on('click', function(evt){
					$this = $(this);
					var dtRow = $this.parents('tr');
					if(confirm("Are you sure to delete this row?")){
						var table = $('#example').DataTable();
						table.row(dtRow[0].rowIndex-1).remove().draw( false );
					}
				});
			});
		});
	});
	//Edit row buttons
	$('.dt-edit').each(function () {
		$(this).on('click', function(evt){
			$this = $(this);
			var dtRow = $this.parents('tr');
			$('div.modal-body').innerHTML='';
			$('div.modal-body').append('Row index: '+dtRow[0].rowIndex+'<br/>');
			$('div.modal-body').append('Number of columns: '+dtRow[0].cells.length+'<br/>');
			for(var i=0; i < dtRow[0].cells.length; i++){
				$('div.modal-body').append('Cell (column, row) '+dtRow[0].cells[i]._DT_CellIndex.column+', '+dtRow[0].cells[i]._DT_CellIndex.row+' => innerHTML : '+dtRow[0].cells[i].innerHTML+'<br/>');
			}
			$('#myModal').modal('show');
		});
	});
	//Delete buttons
	$('.dt-delete').each(function () {
		$(this).on('click', function(evt){
			$this = $(this);
			var dtRow = $this.parents('tr');
			if(confirm("Are you sure to delete this row?")){
				var table = $('#example').DataTable();
				table.row(dtRow[0].rowIndex-1).remove().draw( false );
			}
		});
	});
	$('#myModal').on('hidden.bs.modal', function (evt) {
		$('.modal .modal-body').empty();
	});
});
//商品
$(".size").on('click', function(){
    $(this).toggleClass('focus').siblings().removeClass('focus');
 })
 //
 
  
  
  // 回商品頁面
  document.addEventListener("DOMContentLoaded", function() {
    // 取得按鈕和兩個部分的元素
    const toggleButton = document.getElementById("toggleButton");
    const pricingSection = document.getElementById("pricing");
    const appSection = document.getElementById("app");

    // 初始時僅顯示 pricing 部分
    pricingSection.style.display = "block";
    appSection.style.display = "none";

    // 點擊按鈕時切換顯示與隱藏
    toggleButton.addEventListener("click", function() {
        if (pricingSection.style.display === "block") {
            pricingSection.style.display = "none";
            appSection.style.display = "block";
        } else {
            pricingSection.style.display = "block";
            appSection.style.display = "none";
        }
    });

    // 監聽 Home 連結的點擊事件
    const homeLink = document.getElementById("homeLink");
    homeLink.addEventListener("click", function() {
		if (appSection.style.display === "block") {
            appSection.style.display = "none";
            pricingSection.style.display = "block";
        } else {
            appSection.style.display = "block";
            pricingSection.style.display = "none";
        }
    });
});

