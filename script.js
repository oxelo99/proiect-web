
/*	******************  PopUp Close Function  ********************* */
$(document).ready(function(){
	$("#closePopup").click(function(){
		$(this).hide();
		$("#Popup").hide();
	});
});
/*	-------------------------------------------------------------  */
window.onscroll = function() {myFunction()};
		var header = document.getElementById("MyMenu");
		var sticky = header.offsetTop;
		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
		}
		$(document).ready(function(){
				$("#closeCookieConsent").click(function(){
					$(this).hide();
					$("#cookieConsentOK").hide();
					$("#cookieConsent").hide();
				});
				$("#cookieConsent").click(function(){
					$(this).hide();
					$("#cookieConsentOK").hide();
					$("#closeCookieConsent").hide();
				});
			});
/*********** Read More/Less Button *************/
/*function ReadButtonFunction(read) {
  var dots = document.querySelector(`.Produs[data-product="${read}"].dots`);
  var moreText = document.querySelector(`.Produs[data-product="${read}"].more`);
  var btnText = document.querySelector(`.Produs[data-product="${read}"].myBtn`);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
*/
function readMore(product) {
    let dots = document.querySelector(`.Produs[data-product="${product}"] .dots`);
    let moreText = document.querySelector(`.Produs[data-product="${product}"] .more`); 
    let btnText = document.querySelector(`.Produs[data-product="${product}"] .myBtn`);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.textContent = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.textContent = "Read less"; 
        moreText.style.display = "inline";
    }
}
/**************************************/