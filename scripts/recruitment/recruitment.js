console.log('👋 Hello from recruitment.js!');

window.addEventListener('load', function(){
    document.recruitmentScriptLoaded = true;

    if(document.siteScriptLoaded = true)
    {
        document.getElementById('javascriptLoaded').textContent = 'Yes!';
        document.getElementById('javascriptLoaded').className = 'success';
    }
});