const newsBox = document.getElementById('newsBox');
const newsBoxOverlay = document.getElementById('newsOverlay');

const NewsCloseBtn = document.getElementById('NewsCloseBtn').addEventListener('click', HideNewsLetterBox);

setInterval(showNewsLetterBox, 90000);

setTimeout(HideNewsLetterBox, 30000);

function showNewsLetterBox()
{
    newsBoxOverlay.style.display = 'block';
    newsBox.style.display = 'block';
}

function HideNewsLetterBox()
{
    clearInterval;
    newsBoxOverlay.style.display = 'none';
    newsBox.style.display = 'none';
}