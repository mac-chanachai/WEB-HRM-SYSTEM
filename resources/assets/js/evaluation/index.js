$(document).ready(function(){
	msg_waiting()
	$('.assessment').click(function(){
		/*var id = $(this).data('id');
		//console.log(id);
		//window.open('/evaluation/human_assessment','_self','location=yes,left=400,top=30,height=700,width=950,scrollbars=yes,status=yes');
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('input[name=_token]').attr('value')},
			type: 'POST',
			url: $('#ajax-center-url').data('url'),
			data: {method : 'peopleBeginEvaluation',
					id    : id},
			success: function (result) {
				window.open('/evaluation/human_assessment','_self','location=yes,left=400,top=30,height=700,width=950,scrollbars=yes,status=yes');
				//console.log(result);
			},
			error : function(error)
			{
				console.log(error);
			}
		})*/
	});

	$('.add-evaluation').on('click', function() {
		createNewEvaluation();
	})

	/*$('.view-create-evaluation').click(function(){
		var	id = $(this).data('id');
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('input[name=_token]').attr('value')},
			type: 'POST',
			url: $('#ajax-center-url').data('url'),
			data: { id    :  id
			},
			success: function (result) {
				window.location = $("#view-create-evaluation-url").data('url');
			},
			error : function(error)
			{
				console.log(error);
			}
		})
	})*/
	$(".content").on('click',".btn-remove-topic", function(){ // ลบการประเมิน
		var id = $(this).data('id');
		//console.log(id);
		//$(this).parents(".row-create-evaluation").remove();
		//alert("ok");
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('input[name=_token]').attr('value')},
			type: 'POST',
			url: $('#ajax-center-url').data('url'),
			data: {method : 'deleteCreateEvaluation',
				   id  : id},
			success: function (result) {
                console.log(result);
            },
            error : function(error)
            {
            	console.log(error);
            }
		})
	});

})

function createNewEvaluation()
{
	$.ajax({
		headers: {'X-CSRF-TOKEN': $('input[name=_token]').attr('value')},
		type: 'POST',
		url: $('#ajax-center-url').data('url'),
		data: {method : 'createNewEvaluation' },
		success: function (result) {
			window.location = $("#add-evaluation-url").data('url');
		},
		error : function(error)
		{
			console.log(error);
		}
	})
}

