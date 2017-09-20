/**
 * notify.success(response.message);
 * notify.error(response.message);
 * @constructor
 */
var Notify = function() {
    var div = $('<div id="notify-alert"></div>').appendTo('body');
    var queue = [];
    var _this = this;

    this.success = function(text)
    {
        queue.push({type : 'success', text: text, icon: 'ok-sign'});
        _this.proceedQueue();
    };

    this.error = function(text)
    {
        queue.push({type : 'danger', text: text, icon: 'info-sign'});
        _this.proceedQueue();
    };

    this.proceedQueue = function()
    {
        if(queue.length > 0 && !div.is(":visible"))
        {
            div.removeClass().addClass('alert alert-' + queue[0].type).html('<span class="glyphicon glyphicon-' + queue[0].icon + '"></span> ' + queue[0].text);
            div.fadeToggle();

            setTimeout(function(){
                queue.splice(0,1);
                div.fadeToggle(function(){ _this.proceedQueue();});
            }, 3000);
        }
    }
};
$(function(){
    window.notify = new Notify();
});