console.log('👋 Hello from recruitment.js!');

// check jQuery is loaded
if(typeof jQuery !== 'undefined') {
    $(function() {
        console.log('✅ jQuery is loaded');
        $('#jqueryLoaded').attr('class', 'success').text('Yes!');
    });
}
