console.log('👋 Hello from site.js!');

function onPageLoad() {
    document.getElementById('javascriptLoaded').textContent = 'Yes!';
    document.getElementById('javascriptLoaded').className = 'success';
}

window.addEventListener('load', onPageLoad);