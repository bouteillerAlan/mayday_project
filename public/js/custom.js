//@for the hidden element
function message(target, content) {
    this.target = target;
    this.content = content;
    this.pop = function () {
        var target = document.getElementById(this.target);
        target.innerHTML = this.content;
    };
    return this.pop();
}

//@for the action button
document.addEventListener('scroll', function() {
    var nav = document.getElementById('spy');
    var btn = document.getElementById('btn-spy');

    if (nav.classList.contains('pinned')) {
        btn.classList.remove('hide');
    }

    if (nav.classList.contains('pin-top')) {
        btn.classList.add('hide');
    }
});

