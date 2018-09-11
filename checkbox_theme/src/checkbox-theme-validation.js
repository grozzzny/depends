(function () {
    document.addEventListener('DOMContentLoaded', function () {
        var checkboxes = document.querySelectorAll('[data-checkbox-theme]');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener('invalid', function (event) {
                event.preventDefault();
                var ob = this;
                ob.classList.add('error');
                clearTimeout(this.timeout);
                this.timeout = setTimeout(function () {ob.classList.remove('error');}, 1000);
            });
        }
    });
})();