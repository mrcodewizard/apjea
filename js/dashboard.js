	
   $(document).ready(function(){
   		$(".nt-dropdown-content").hide();
		$(".nt-dropdown span.toggle").click(function(){
			$(".nt-dropdown-content").slideToggle(500);
		});

		$(".message .close").click(function(){
			$(this).closest(".message").fadeOut("slow");
		});

		$(".family-form").on("click",".icon-plus i",function(){
			// alert('click hua he');
			var row = `<div class="row custom-row">
							<div class="col-md-10 row">
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Member Name">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<select name="">
											<option value="">Select Relation</option>
											<option value="">Father</option>
											<option value="">Mother</option>
											<option value="">Child</option>
										</select>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Age">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<select name="">
											<option value="">Marital Status</option>
											<option value="">Married</option>
											<option value="">Unmarried</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="icon-plus" title="Add Row"><i class="fa fa-plus-circle"></i></span>
									<span class="icon-delete" title="Delete Row"><i class="fa fa-trash"></i>
									</span>
								</div>
							</div>
					   </div>`;
			$(".family-form").find(".row:last-child").before(row);
		});
		$(".family-form").on("click",".icon-delete i",function(){
			if($(".family-form").find(".custom-row").length > 1){
				$(this).closest(".custom-row").remove();
			}
		});

		$(".claim-row").hide();
		$(".item-col").click(function(){
			$(".item-col").removeClass("active");
			$(this).addClass("active");
			var dataId = $(this).attr("data-href");
			var formId = "";
			$(".claim-row").each(function(el){
				var formId = $(this).attr("id");
				if(formId == dataId){
					$(this).show();
					$("html, body").animate({scrollTop:1020},"slow");
				}
				else{
					$(this).hide();
				}
			});
		});

		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});

		$("input[type='date']").on("change", function() {
		    this.setAttribute(
		        "data-date",
		        moment(this.value,"YYYY-MM-DD")
		        .format( this.getAttribute("data-date-format") )
		    )
		}).trigger("change");

		$(".icon-list label").click(function(){
			$(this).closest(".icon-group").find(".icon-list label").removeClass("active");
			$(this).addClass("active");
		})
   });