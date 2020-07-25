
/*!
 * controlbugs tool 1.0.0 <https://controlbugs.com>
 * Copyright (c) 2019 ControlBugs <https://controlbugs.com>
 */

$(document).ready(function() {

    $('.end').click(function(){
        $('.popup').removeClass('show');
        $('.popup').css('display', 'none');
        document.location.reload(true);
    });

    $('#ctrl-btn').click(function() {

        html2canvas(document.body).then(canvas => {

            $('.popup').addClass('show');
            $('.popup').css('display', 'block');

            $('#modal-body').html(canvas)

            var ctx;
            var mouseDown = 0, lastX, lastY;


            function draw(ctx, x, y) {
                ctx.beginPath();
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(x, y);
                ctx.closePath();
                ctx.stroke();
            }

            function onMouseDown(e) {
                var xy = getMousePos(e);
                lastX = xy.mouseX;
                lastY = xy.mouseY;
                mouseDown = 1;
            }

            function onMouseUp() {
                mouseDown = 0
            }

            function onMouseMove(e) {
                if (mouseDown == 1) {
                    var xy = getMousePos(e);
                    draw(ctx, xy.mouseX, xy.mouseY);
                    lastX = xy.mouseX, lastY = xy.mouseY;
                }
            }

            function getMousePos(e) {
                var o = {};
                if (!e)
                    var e = event
                if (e.offsetX) {
                    o.mouseX = e.offsetX
                    o.mouseY = e.offsetY
                }
                else if (e.layerX) {
                    o.mouseX = e.layerX
                    o.mouseY = e.layerY
                }
                return o;
            }

            function init() {
                ctx = canvas.getContext('2d')
                canvas.addEventListener('mousedown', onMouseDown, false)
                canvas.addEventListener('mousemove', onMouseMove, false)
                canvas.addEventListener('mouseup', onMouseUp, false)
            }

            init();

            $('#save-edit').click(function () {

                html2canvas(canvas).then(canvas => {
                    $('#img-edit').html(canvas)
                    $('#modal-body').css('display', 'none');
                    $('#save-edit').css('display', 'none');
                    canvas.innerHTML = '<style>canvas { border:0;}</style>';
                    // Get base64URL
                    var base64URL = canvas.toDataURL();

                    document.getElementById("up-img").value = base64URL;

                });


            }); // end of saving img

        }); // end of taking the screen shot

    });

    document.addEventListener('keydown', function (event) {
        if (event.keyCode == 77 && event.ctrlKey) {

            html2canvas(document.body).then(canvas => {

                $('.popup').addClass('show');
                $('.popup').css('display', 'block');

                $('#modal-body').html(canvas)

                var ctx;
                var mouseDown = 0, lastX, lastY;


                function draw(ctx, x, y) {
                    ctx.beginPath();
                    ctx.moveTo(lastX, lastY);
                    ctx.lineTo(x, y);
                    ctx.closePath();
                    ctx.stroke();
                }

                function onMouseDown(e) {
                    var xy = getMousePos(e);
                    lastX = xy.mouseX;
                    lastY = xy.mouseY;
                    mouseDown = 1;
                }

                function onMouseUp() {
                    mouseDown = 0
                }

                function onMouseMove(e) {
                    if (mouseDown == 1) {
                        var xy = getMousePos(e);
                        draw(ctx, xy.mouseX, xy.mouseY);
                        lastX = xy.mouseX, lastY = xy.mouseY;
                    }
                }

                function getMousePos(e) {
                    var o = {};
                    if (!e)
                        var e = event
                    if (e.offsetX) {
                        o.mouseX = e.offsetX
                        o.mouseY = e.offsetY
                    }
                    else if (e.layerX) {
                        o.mouseX = e.layerX
                        o.mouseY = e.layerY
                    }
                    return o;
                }

                function init() {
                    ctx = canvas.getContext('2d')
                    canvas.addEventListener('mousedown', onMouseDown, false)
                    canvas.addEventListener('mousemove', onMouseMove, false)
                    canvas.addEventListener('mouseup', onMouseUp, false)
                }

                init();

                $('#save-edit').click(function () {

                    html2canvas(canvas).then(canvas => {
                        $('#img-edit').html(canvas)
                        $('#modal-body').css('display', 'none');
                        $('#save-edit').css('display', 'none');
                        $('#img-save').css('display', 'none');
                        $('#draw-img').css('display', 'none');
                        $('#img-saved').css('display', 'block');
                        canvas.innerHTML = '<style>canvas { border:0;}</style>';
                        // Get base64URL
                        var base64URL = canvas.toDataURL();

                        document.getElementById("up-img").value = base64URL;

                    });


                }); // end of saving img

            }); // end of taking the screen shot

        } // end of code = 17

    }); // end of key down click

}); // end of jquery start code
