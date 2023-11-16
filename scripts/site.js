console.log('👋 Hello from site.js!');

window.addEventListener('load', function(){
    document.siteScriptLoaded = true;

    if(document.recruitmentScriptLoaded = true)
    {
        document.getElementById('javascriptLoaded').textContent = 'Yes!';
        document.getElementById('javascriptLoaded').className = 'success';
    }
});