document.addEventListener('DOMContentLoaded', () => {
	const popup = () => {
		const popupWrap = document.getElementById('popup');
		const bntArr = Array.from(document.querySelectorAll('.open-popup'));

		if (bntArr.length === 0 || !popupWrap) return;

		bntArr.forEach(el => {
			el.addEventListener('click', () => {
				popupWrap.classList.add('open');
			});
		});

		popupWrap.addEventListener('click', ev => {
			if (ev.target === popupWrap) popupWrap.classList.remove('open');
		});
	};

	popup();
});
