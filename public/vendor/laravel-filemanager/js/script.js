function goTo(e){$("#working_dir").val(e),loadItems()}function getPreviousDir(){var e="/",o=$("#working_dir").val(),n=o.lastIndexOf(e),t=o.substring(0,n);return t}function dir_starts_with(e){return 0===$("#working_dir").val().indexOf(e)}function setOpenFolders(){for(var e=$(".folder-item"),o=e.length-1;o>=0;o--)dir_starts_with($(e[o]).data("id"))?$(e[o]).children("i").removeClass("fa-folder").addClass("fa-folder-open"):$(e[o]).children("i").removeClass("fa-folder-open").addClass("fa-folder")}function performLfmRequest(e,o,n){var t=defaultParameters();return null!=o&&$.each(o,function(e,o){t[e]=o}),$.ajax({type:"GET",dataType:n||"text",url:lfm_route+"/"+e,data:t,cache:!1}).fail(function(e){displayErrorResponse(e)})}function displayErrorResponse(e){notify('<div style="max-height:50vh;overflow: scroll;">'+e.responseText+"</div>")}function displaySuccessMessage(e){if("OK"==e){var o=$("<div>").addClass("alert alert-success").append($("<i>").addClass("fa fa-check")).append(" File Uploaded Successfully.");$("#alerts").append(o),setTimeout(function(){o.remove()},2e3)}}function loadFolders(){performLfmRequest("folders",{},"html").done(function(e){$("#tree").html(e),loadItems()})}function loadItems(){$("#lfm-loader").show(),performLfmRequest("jsonitems",{show_list:show_list,sort_type:sort_type},"html").done(function(e){var o=JSON.parse(e);$("#content").html(o.html),$("#nav-buttons > ul").removeClass("hidden"),$("#working_dir").val(o.working_dir),$("#current_dir").text(o.working_dir),console.log("Current working_dir : "+$("#working_dir").val()),""==getPreviousDir()?$("#to-previous").addClass("hide"):$("#to-previous").removeClass("hide"),setOpenFolders()}).always(function(){$("#lfm-loader").hide()})}function createFolder(e){performLfmRequest("newfolder",{name:e}).done(refreshFoldersAndItems)}function rename(e){bootbox.prompt({title:lang["message-rename"],value:e,callback:function(o){null!=o&&performLfmRequest("rename",{file:e,new_name:o}).done(refreshFoldersAndItems)}})}function trash(e){bootbox.confirm(lang["message-delete"],function(o){1==o&&performLfmRequest("delete",{items:e}).done(refreshFoldersAndItems)})}function cropImage(e){performLfmRequest("crop",{img:e}).done(hideNavAndShowEditor)}function resizeImage(e){performLfmRequest("resize",{img:e}).done(hideNavAndShowEditor)}function download(e){var o=defaultParameters();o.file=e,location.href=lfm_route+"/download?"+$.param(o)}function useFile(e){function o(e){var o=new RegExp("(?:[?&]|&)"+e+"=([^&]+)","i"),n=window.location.search.match(o);return n&&n.length>1?n[1]:null}function n(e){var o=tinyMCEPopup.getWindowArg("window");o.document.getElementById(tinyMCEPopup.getWindowArg("input")).value=e,"undefined"!=typeof o.ImageDialog&&(o.ImageDialog.getImageData&&o.ImageDialog.getImageData(),o.ImageDialog.showPreviewImage&&o.ImageDialog.showPreviewImage(e)),tinyMCEPopup.close()}function t(e,o){parent.document.getElementById(o).value=e,"undefined"!=typeof parent.tinyMCE&&parent.tinyMCE.activeEditor.windowManager.close(),"undefined"!=typeof parent.$.fn.colorbox&&parent.$.fn.colorbox.close()}function a(e){window.opener?window.opener.CKEDITOR.tools.callFunction(o("CKEditorFuncNum"),e):(parent.CKEDITOR.tools.callFunction(o("CKEditorFuncNum"),e),parent.CKEDITOR.tools.callFunction(o("CKEditorCleanUpFuncNum")))}function i(e){var o=e,n=data.Properties.Width,t=data.Properties.Height;window.opener.SetUrl(o,n,t)}var r=e,l=o("field_name"),d=o("CKEditor"),s="undefined"!=typeof data&&""!=data.Properties.Width,u=r.replace(route_prefix,"");window.opener||window.tinyMCEPopup||l||o("CKEditorCleanUpFuncNum")||d?(window.tinyMCEPopup?n(r):l?t(r,l):d?a(r):s?i(r):window.opener.SetUrl(r,u),window.opener&&window.close()):window.open(r)}function defaultParameters(){return{working_dir:$("#working_dir").val(),type:$("#type").val()}}function notImp(){notify("Not yet implemented!")}function notify(e){bootbox.alert(e)}function fileView(e,o){bootbox.dialog({title:lang["title-view"],message:$("<img>").addClass("img img-responsive center-block").attr("src",e+"?timestamp="+o),size:"large",onEscape:!0,backdrop:!0})}var show_list,sort_type="alphabetic";$(document).ready(function(){bootbox.setDefaults({locale:lang["locale-bootbox"]}),loadFolders(),performLfmRequest("errors").done(function(e){for(var o=JSON.parse(e),n=0;n<o.length;n++)$("#alerts").append($("<div>").addClass("alert alert-warning").append($("<i>").addClass("fa fa-exclamation-circle")).append(" "+o[n]))}),$(window).on("dragenter",function(){$("#uploadModal").modal("show")})}),$("#nav-buttons a").click(function(e){e.preventDefault()}),$("#to-previous").click(function(){var e=getPreviousDir();""!=e&&goTo(e)}),$("#add-folder").click(function(){bootbox.prompt(lang["message-name"],function(e){null!=e&&createFolder(e)})}),$("#upload").click(function(){$("#uploadModal").modal("show")}),$("#upload-btn").click(function(){function e(){$("#uploadModal").modal("hide"),$("#upload-btn").html(lang["btn-upload"]).removeClass("disabled"),$("input#upload").val("")}$(this).html("").append($("<i>").addClass("fa fa-refresh fa-spin")).append(" "+lang["btn-uploading"]).addClass("disabled"),$("#uploadForm").ajaxSubmit({success:function(o){e(),refreshFoldersAndItems(o),displaySuccessMessage(o)},error:function(o){displayErrorResponse(o),e()}})}),$("#thumbnail-display").click(function(){show_list=0,loadItems()}),$("#list-display").click(function(){show_list=1,loadItems()}),$("#list-sort-alphabetic").click(function(){sort_type="alphabetic",loadItems()}),$("#list-sort-time").click(function(){sort_type="time",loadItems()}),$(document).on("click",".file-item",function(){useFile($(this).data("id"))}),$(document).on("click",".folder-item",function(){goTo($(this).data("id"))});var refreshFoldersAndItems=function(e){loadFolders(),"OK"!=e&&(e=Array.isArray(e)?e.join("<br/>"):e,notify(e))},hideNavAndShowEditor=function(e){$("#nav-buttons > ul").addClass("hidden"),$("#content").html(e)};
