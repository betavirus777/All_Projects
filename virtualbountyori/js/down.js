var current;
var _allowed = 0;
var _inner_done = 0;
var done_ans = [
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
];

function init() {
    document.getElementById('menu2').style.pointerEvents = 'none';
    for (var i = 1; i <= 6; i++)
        for (var j = 1; j <= 3; j++) {
            var circle = document.getElementById('' + i + j);
            circle.style.position = "absolute";
            circle.style.left = j == 1 ? "60px" : j == 2 ? "120px" : "180px";
            circle.style.top = j == 1 ? "120px" : j == 2 ? "100px" : "120px";
        }
    for (var j = 1; j <= 3; j++) {
        var circle = document.getElementById('' + 5 + j);
        circle.style.position = "absolute";
        circle.style.left = j == 1 ? "70px" : j == 2 ? "130px" : "190px";
        circle.style.top = j == 1 ? "120px" : j == 2 ? "100px" : "120px";
    }
    for (var k = 1; k <= 4; k++)
        document.getElementById(k).style.transform = "rotate(-" + 60 + "deg)";
    document.getElementById(5).style.transform = "rotate(-" + 60 + "deg)";
    document.getElementById(6).style.transform = "rotate(-30deg)";

    for (var i = 1; i <= 6; i++)
        for (var j = 1; j <= 2; j++) {
            var circle = document.getElementById('0' + i + j);
            circle.style.position = "absolute";
            circle.style.left = j == 1 ? "30px" : "80px";
            circle.style.top = j == 1 ? "50px" : "50px";
        }
    for (var k = 1; k <= 5; k++)
        document.getElementById('0' + k).style.transform = "rotate(-" + 60 + "deg)";
    document.getElementById('06').style.transform = "rotate(-30deg)";
}
var _enable = false;
var _enabled = -1;

function disp(x) {
    document.getElementById(x).style.display = "block";
}

function _disp(x) {
    if (_allowed != 0)
        document.getElementById(x).style.display = "block";
}

function hide(x) {
    document.getElementById(x).style.display = "none";
}
var ang_dist = [0, 1, 2, 3, 4, 5];

function rot(x) {
    var temp = Math.abs(ang_dist[x]);
    $('#menu').css('transform', 'rotate(' + -60 * temp + 'deg)');
}

function _rot(x) {

    var temp = Math.abs(ang_dist[x]);
    $('#menu2').css('transform', 'rotate(' + -60 * temp + 'deg)');

}

function q(x) {
    current = x;
    if (current[0] == '0') {
        if (done_ans[1][(Number(current[1]) - 1) * 2 + Number(current[2]) - 1] != 0) {
            console.log((Number(current[1]) - 1) * 2 + Number(current[2]) - 1);
            return false;
        }
    } else if (current != 'final') {
        if (done_ans[0][(Number(current[0]) - 1) * 3 + Number(current[1]) - 1] != 0) {
            console.log((Number(current[0]) - 1) * 3 + Number(current[1]) - 1);
            return false;
        }
    }
    document.getElementById('member-details').innerHTML = "<p style='font-size:30px; color:#fff'>Loading...</p>";
    $('#member_modal').modal('show');
    $.post("questions.php", {
        'id': x
    }, function(data, status) {
        data = data + '<br><br><button class="btn btn-default" onClick="submitans();">Submit</button>'
        document.getElementById('member-details').innerHTML = data;
        document.getElementById('answer').onkeyup = function(e) {
            if (e.keyCode == 13) {
                submitans();
            }
        }
        $('#answer').focus();
    });

}

function submitans() {
document.body.style.pointerEvents = 'none';
    var ans = document.getElementById('answer').value;
    document.getElementById('member-details').innerHTML = "<p style='font-size:20px; color:#fff'>Checking...</p>";
    $.post("answer.php", {
        'id': current,
        'answer': ans
    }, function(data, status) {
        $('#member_modal').modal('hide');
        if (data == 0)
            $('#wrong').delay(500).animate({
                opacity: 1
            }, 1000).delay(1000).animate({
                opacity: 0
            }, 1000);
        else {
            if (current[0] == '0') {
                _inner_done++;
                done_ans[1][(Number(current[1]) - 1) * 2 + Number(current[2]) - 1] = 1;
				document.getElementById(current).style.pointerEvents = 'none';
            $('#' + current).addClass('correctans');
            } else if (current != 'final') {
                done_ans[0][(Number(current[0]) - 1) * 3 + Number(current[1]) - 1] = 1;
				document.getElementById(current).style.pointerEvents = 'none';
            $('#' + current).addClass('correctans');
            }
            $('#correct').delay(500).animate({
                opacity: 1
            }, 1000).delay(1000).animate({
                opacity: 0
            }, 1000);
            
            if (current == 'final') {
                document.getElementById('vb-container').innerHTML = "Thanks for playing!";
            } else {
                document.getElementById(current).style.pointerEvents = 'none';
                $('#' + current).addClass('correctans');
            }
            $.post("enable.php", {}, function(data, status) {
				document.body.style.pointerEvents = 'auto';
                if (data == 1) {
                    _allowed += 2;
                    console.log(_allowed)
                    $('#' + current).parent(this).parent(this).addClass('done').css('pointer-events', 'none');
                    $('#menu2wrapper').delay(500).animate({
                        opacity: 0
                    }, 1000).delay(1000).hide();
                    document.getElementById('menu2').style.pointerEvents = 'auto';
                    _enable = true;
                }
            });
        
        if (current[0] == '0') {
            --_allowed;
            $.post("enable.php", {
                'inner': 1
            }, function(data, status) {
				document.body.style.pointerEvents = 'auto';
                if (data == 1 || _allowed == 0) {
                    if (data == 1) {

                        $('#' + current).parent(this).parent(this).addClass('done').css('pointer-events', 'none');
                        if (_inner_done == 12) {
                            document.getElementById('menu3').style.pointerEvents = 'auto';
                            $('#menu3').css('cursor', 'pointer');
                            $('#menu3').css('background-color', '#FC3');
                            document.getElementById('menu3').addEventListener('click', function() {
                                q('final')
                            });
                        }
                    }
                    if (_allowed == 0) {
                        $('#menu2wrapper').show().css('opacity', '1');
                        document.getElementById('menu2').style.pointerEvents = 'none';
                        _enable = false;
                        _enabled = -1;
                    }
                }

            });
        }
		}
    });
}