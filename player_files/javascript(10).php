function openTab(evt,cityName){var i,tabcontent,tablinks;tabcontent=document.getElementsByClassName("tabcontent");for(i=0;i<tabcontent.length;i++){tabcontent[i].style.display="none"}
tablinks=document.getElementsByClassName("tablinks");for(i=0;i<tablinks.length;i++){tablinks[i].className=tablinks[i].className.replace(" active","")}
document.getElementById(cityName).style.display="block";evt.currentTarget.className+=" active"}
$(document).ready(function(){if($(".book_content").length>0){$(".book_content").prepend("<hr style='margin-top: 0px !important; width: 30%; border-top: 1px solid black; position: relative; margin-left: 0px !important'></hr>");if($("h4").length>0){$(".book_content h3").append("<hr style='width: 30%; border-top: 1px solid black; position: relative; margin-left: 0px !important'></hr>")}}
$(".book-module").hover(function(){$(this).css("background-color","#EEEEEE")},function(){$(this).css("background-color","#F5F5F5")});$(".collapse-link").click(function(e){$(this).closest(".panel-heading").find(".panel-title").first().toggleClass("collapsed")});if($().tooltip!==undefined){$('[data-toggle="tooltip"]').tooltip()}
$("#rankingModal").css("display","none");$('.level-icon-wrapper a').click(function(){('#rankingModal').css("display","block")});$('.catalog-cards .Disabled a.bx--btn').attr('href','#');if($().modal!==undefined){$(".site-messages").modal("show")}});$(document).ready(function(){$('#hybrid-table_filter input').attr('placeholder','Search');$(window).scroll(function(){if($(this).scrollTop()>400){$('.float-bar-nav').fadeIn()}else{$('.float-bar-nav').fadeOut()}});$(window).scroll(function(){if($('.bnav-tab').length){}});$('.back-to-top a').click(function(){$('html, body').animate({scrollTop:0},700);return!1});$(window).scroll(function(){if($(this).scrollTop()>800){$('.back-to-top a').fadeIn()}else{$('.back-to-top a').fadeOut()}});$('.back-to-top a').click(function(){$('html, body').animate({scrollTop:0},700);return!1})});$(function(){$(".progress-hyrid").each(function(){var value=$(this).attr('data-value');var left=$(this).find('.progress-left .progress-bar');var right=$(this).find('.progress-right .progress-bar');if(value>0){if(value<=50){right.css('transform','rotate('+percentageToDegrees(value)+'deg)')}else{right.css('transform','rotate(180deg)')
left.css('transform','rotate('+percentageToDegrees(value-50)+'deg)')}}})
function percentageToDegrees(percentage){return percentage/100*360}});var carousel_timer=setInterval(function(){if($().carousel!==undefined&&$(".carousel").length>0){$(".carousel").carousel('pause');clearInterval(carousel_timer)}},1000);if($('.bnav-tab').length>0){var stickyNavTop=$('.bnav-tab').offset().top;var stickyNav=function(){var scrollTop=$(window).scrollTop();if(scrollTop>stickyNavTop){$('.bnav-tab').addClass('fixed-top')}else{$('.bnav-tab').removeClass('fixed-top');$('.bnav-tab a').removeClass('active')}};stickyNav();$(window).scroll(function(){stickyNav()})}
$(document).ready(function(){M.util.js_pending('theme_boost/loader');require(['theme_boost/loader','theme_boost/drawer'],function(Loader,Drawer){Drawer.init();M.util.js_complete('theme_boost/loader')});$('.bx--breadcrumb').insertAfter('.bnav-tab')});function hideOtherImgs(currID){$('.keynote-container .img').each(function(i,item){console.log($(item).id!==currID,$(item).id,currID)
$(item).css("display","none")});$('.keynote-container .img--fullscreen').each(function(i,item){console.log($(item).id!==currID,$(item).id,currID)
if($(item).attr('id').indexOf(currID)!==-1){$(item).css("display","flex")}})}
function showAllImgs(){$('.keynote-container .img').each(function(i,item){$(item).css("display","flex")});$('.keynote-container .img--fullscreen').each(function(i,item){$(item).css("display","none")})}
$('.keynote-container .img').on('click',function(){$this=$(this);hideOtherImgs($this.attr('id'))});$('.keynote-container .back-button').on('click',function(){$this=$(this);showAllImgs()});function setCookie(cname,cvalue,exdays){const d=new Date();d.setTime(d.getTime()+(exdays*24*60*60*1000));let expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+";"+expires+";path=/"}
$(".bx--skeleton").removeClass("bx--skeleton");$(document).ready(function(){$("#close_notification").click(function(){var courseid=$("#not_courseid").attr('value');var userid=$("#not_userid").attr('value');$.ajax({url:"/theme/dlpcarbon/close_notification.php",type:"POST",data:{courseid:courseid,userid:userid,},success:function(data){$("#close_notification").parent().remove()},})});if($(".block_course_modulenavigation").length>0){if($(".block_course_modulenavigation").find('.d-inline').length==0){$(".block_settings").remove();$(".block_book_toc").remove();$(".badge_message").remove()}}
if($(".block_settings").length==0){$(".badge_message").remove()}else if($(".block_settings").length==1){$(".notification_course").remove()}});$(".bx--skeleton").removeClass("bx--skeleton");$(document).ready(function(){var copyButton=$('.bx--copy-btn');copyButton.on('click',function(){var codeSnippet=$('.bx--snippet-container').text().trim();var tempInput=$('<input>');tempInput.val(codeSnippet);$('body').append(tempInput);tempInput.select();document.execCommand('copy');tempInput.remove();$('.bx--assistive-text').text('Copied!')})});$(document).ready(function(){$(".revalidate_submit").click(function(){$(".modal-revalidate").modal('show')});$("#button_reset_completions").click(function(){var wls_userid=$("#wls_userid").val();var wls_coursecode=$("#wls_coursecode").val();$.ajax({url:"/local/wlsbridge/revalidate_course.php",type:"POST",data:{wls_userid:wls_userid,wls_coursecode:wls_coursecode,action:"reset"},beforeSend:function(){$("#overlay").show()},success:function(data){$("#overlay").hide();location.reload()},error:function(){$("#overlay").hide()}})});if(window.location.href.indexOf("/mod/")==-1&&window.location.href.indexOf("/course/")==-1){console.log('test');$(".block_course_modulenavigation").remove()}
if(window.location.href.indexOf("/accesscontrol/")!==-1&&$(".block_settings").length==0){$(".leftnav").remove();$(".bx--col-lg-9").addClass("bx--col-lg-12").removeClass("bx--col-lg-9")}
if(window.location.href.indexOf("/quiz/attempt")!=-1){$(".leftnav").css("background-color","white");$(".right-nav-blocks").attr('style','margin-top: 0px !important');$("#activity-prevnext").remove()}
if(window.location.href.indexOf("/report/stats/")!=-1){if($(".lastrow").length>0){if($(".lastrow").length>1){$(".lastrow").eq(1).removeClass('lastrow')}
$(".lastrow").css("display","grid")}}
if(window.location.href.indexOf("course/edit")!=-1){if($("#fitem_id_hiddensections").length>0){$("#fitem_id_hiddensections").remove()}}
$(".sitetopic").append($(".block_enrollmentkey"));$(".sitetopic").append($(".block_ibmmyenrols"));if($("#settingsnav").length==0||($(".role-student").length>0&&$(".meta").length>0&&$(".role").length>0)&&$(".format-topics").length==0){if($(".ishidden").length>0){$(".ishidden").parent().parent().parent().remove()}}
if($(".role-student").length>0&&$(".meta").length>0&&$(".role").length>0){console.log('test 2');$(".block_settings").remove();$(".block_course_modulenavigation").find($(".card-title")).remove()}
if($(".block_navigation").length>0){$(".block_navigation").remove()}
$(".block_settings").append($(".block_adminblock"));$(".path-course-view .completionprogress").detach().appendTo('.progress-outer');$('h3.sectionname, span.sectionname, .summarytext').find('br').remove();function onlySpaces(str){return str.trim().length===0}
if(!onlySpaces($('#section-0').find(".sectionname").text())){$('#section-0 .content .sectionname').css('margin-top','+=15px');$('#section-0 .content .sectionname').css('margin-bottom','+=25px')}
if(!onlySpaces($('#section-0 .content .summarytext').find(".no-overflow").text())){$('body:not(.editing) #section-0 .content .summarytext .no-overflow').css('padding-top','+=60px')}
if(onlySpaces($('#section-0 .content .sectionname').find(".no-overflow").text())){$('body:not(.editing) #section-0 .content .summarytext .no-overflow').css('padding-top','-=30px')}})