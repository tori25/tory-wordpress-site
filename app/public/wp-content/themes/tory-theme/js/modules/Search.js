import $ from 'jquery';

class Search {
	// 1. describe and create/initiate our object
	constructor() {
		this.resultsDiv = $("#search-overlay__results");
		this.openButton = $(".js-search-trigger");
		this.closeButton = $(".search-overlay__close");
		this.searchOverlay = $(".search-overlay");
		this.searchField = $("#search-term");
		this.isOverlayOpen = false;
		this.isSpinnerVisible = false;
		this.previousValue;
		this.typingTimer;
		this.events();
  }

  // 2. Events
	events() {
		this.openButton.on("click", this.openOverlay.bind(this));
		this.closeButton.on("click", this.closeOverlay.bind(this));
		$(document).on("keydown", this.keyPressDispatcher.bind(this));
		this.searchField.on("keyup", this.typingLogic.bind(this));
	}

	// 3. methods will live here(functions, actions, ...)
	typingLogic() {
		if(this.searchField.val() !== this.previousValue) {
			clearTimeout(this.typingTimer);
			if(this.searchField.val()) {
				if (!this.isSpinnerVisible) {
					this.resultsDiv.html('<div class="spinner-loader"></div>');
					this.isSpinnerVisible = true;
				}

				this.typingTimer = setTimeout(this.getResults.bind(this), 500);
			} else {
				this.resultsDiv.html('');
				this.isSpinnerVisible = false;
			}
		}

		this.previousValue = this.searchField.val();
	}

	getResults() {
		$.getJSON(
			'http://localhost:3000/wp-json/wp/v2/posts?search=' + this.searchField.val(),
			results => {
				this.resultsDiv.html(`
				<h2 class="search-overlay__section-title">General information</h2>
				<ul class="link-list min-list">
					${results.map(item =>`<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
				</ul>
			`); });
	}

	openOverlay() {
		this.searchOverlay.addClass("search-overlay--active");
		$("body").addClass("body-no-scroll");
		this.isOverlayOpen = true;
	}

	closeOverlay() {
		this.searchOverlay.removeClass("search-overlay--active");
		$("body").removeClass("body-no-scroll");
		this.isOverlayOpen = false;
	}

	keyPressDispatcher(e) {
		if (e.keyCode === 83 && !this.isOverlayOpen && !$("input, textarea").is(':focus')) {
			this.openOverlay();
		}

		if (e.keyCode === 27 && this.isOverlayOpen) {
			this.closeOverlay();
		}
	}
}

export default Search;