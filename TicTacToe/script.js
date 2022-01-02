var flag = 'X';
var O_score = 0;
var X_score = 0;
var draw_score = 0;
var c = 0;
var X = document.getElementById('x')
var O = document.getElementById('o')
var draw = document.getElementById('draw')
var one_or_two = document.querySelector('input[name="one-or-two"]:checked').value;
var one = document.getElementById('one')
var two = document.getElementById('two')
var three = document.getElementById('three')
var four = document.getElementById('four')
var five = document.getElementById('five')
var six = document.getElementById('six')
var seven = document.getElementById('seven')
var eight = document.getElementById('eight')
var nine = document.getElementById('nine')
var tiles = document.getElementsByClassName('tile')

function one_or_two_select () {
    one_or_two = document.querySelector('input[name="one-or-two"]:checked').value;
}

function select(s) {
    c += 1;
    if(one_or_two == 'two'){
        if (flag == 'X'){
            document.getElementById(s).classList.add('X');
            document.getElementById(s).innerHTML = 'X';
            flag = 'O'
        }else{
            document.getElementById(s).classList.add('O');
            document.getElementById(s).innerHTML = 'O';
            flag = 'X'
        }
    }else{
        
        if (flag == 'X'){
            document.getElementById(s).classList.add('X');
            document.getElementById(s).innerHTML = 'X';
            flag = 'O'
            if (c < 9){
                computer_select()
            }
        }else{
            document.getElementById(s).classList.add('O');
            document.getElementById(s).innerHTML = 'O';
            flag = 'X'
        }
    }
    console.log(flag);
    check()
}

function check() {
    if (one.innerHTML == two.innerHTML && two.innerHTML == three.innerHTML && one.innerHTML != ''){
        window.setTimeout(win, 500)
    }else if (one.innerHTML == five.innerHTML && five.innerHTML == nine.innerHTML && one.innerHTML != ''){
        window.setTimeout(win, 500)
    }else if (three.innerHTML == five.innerHTML && five.innerHTML == seven.innerHTML && three.innerHTML != ''){
        window.setTimeout(win, 500)
    }else if (four.innerHTML == five.innerHTML && five.innerHTML == six.innerHTML && four.innerHTML != ''){
        window.setTimeout(win, 500)
    }else if (seven.innerHTML == eight.innerHTML && eight.innerHTML == nine.innerHTML && seven.innerHTML != ''){
        window.setTimeout(win, 500)            
    }else if (one.innerHTML == four.innerHTML && four.innerHTML == seven.innerHTML && one.innerHTML != ''){
        window.setTimeout(win, 500)            
    }else if (two.innerHTML == five.innerHTML && five.innerHTML == eight.innerHTML && two.innerHTML != ''){
        window.setTimeout(win, 500)            
    }else if (three.innerHTML == six.innerHTML && six.innerHTML == nine.innerHTML && three.innerHTML != ''){
        window.setTimeout(win, 500)            
    }
    else if(c == 9){
        for(var i = 0; i < tiles.length; i++){
            tiles[i].innerHTML = ''
            tiles[i].classList.remove('X')
            tiles[i].classList.remove('O')
        }
        draw_score += 1
        draw.innerHTML = draw_score
        c = 0;
        window.alert('Draw 💐')
        flag = 'X'
    }
    console.log('c: ', c);
}

function computer_select(){
    n = Math.floor(Math.random() * 9) + 1;
    flag = 'O' 
    switch (n){
        case 1:
            if (one.innerHTML == ''){
                select('one');
            }else{
                computer_select()
            }
            break;
        case 2:
            if (two.innerHTML == ''){
                select('two');
            }else{
                computer_select()
            }
            break;
        case 3:
            if (three.innerHTML == ''){
                select('three');
            }else{
                computer_select()
            }
            break;
        case 4:
            if (four.innerHTML == ''){
                select('four');
            }else{
                computer_select()
            }
            break;
        case 5:    
            if (five.innerHTML == ''){
                select('five');
            }else{
                computer_select()
            }
            break;
        case 6:
            if (six.innerHTML == ''){
                select('six');
            }else{
                computer_select()
            }
            break;
        case 7:
            if (seven.innerHTML == ''){
                select('seven');
            }else{
                computer_select()
            }
            break;
        case 8:
            if (eight.innerHTML == ''){
                select('eight');
            }else{
                computer_select()
            }
            break;
        case 9:
            if (nine.innerHTML == ''){
                select('nine');
            }else{
                computer_select()
            }
            break;
    }
}

function win(){
    c = 0;
    if(flag == 'O'){
        X_score += 1;
        X.innerHTML = X_score
        window.alert('Player X Wins 🏆💐')
    }else{
        O_score += 1;
        O.innerHTML = O_score
        window.alert('Player O Wins 🏆💐')
    }
    for(var i = 0; i < tiles.length; i++){
        tiles[i].innerHTML = ''
        tiles[i].classList.remove('X')
        tiles[i].classList.remove('O')
    }
    flag = 'X'
}