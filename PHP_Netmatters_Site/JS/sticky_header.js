
/*!
 * Run a callback after the user scrolls, calculating the distance and direction scrolled
 * (c) 2019 Chris Ferdinandi, MIT License, https://gomakethings.com
 * @param  {Function} callback The callback function to run
 * @param  {Integer}  refresh  How long to wait between scroll events [optional]
 */

const headerElement = document.getElementById("headerElement");

let header_Height = 168

if (document.body.clientWidth < 750) {
	header_Height = 168
} else if (document.body.clientWidth < 975) {
	header_Height = 110
} else {
	header_Height = 210
}

let scrollHeight = 0

window.addEventListener("scroll", function() {

	if (document.documentElement.scrollTop >= header_Height) {

		if (document.documentElement.scrollTop < scrollHeight) {
			headerElement.classList.remove("sticky_header")

		} else {
			headerElement.classList.add("sticky_header")
		}
		
		scrollHeight = document.documentElement.scrollTop
	}
	if (document.documentElement.scrollTop <= header_Height) {
		headerElement.classList.remove("sticky_header")
	}
})
