
/*
var count = 1;
function add_question(){
var quizform = document.getElementById('quizForm');
var current = quizform.innerHTML;
var question = '<label for="q'+count+'">Q'+count+': Title</label><input type="text" placeholder="What is cat in spanish?" id="q'+count+'" name="q'+count+'" class="form-control"/><br/><p>Please select the option with the correct answer</p><input type="radio" name="radioq'+count+'" id="radioq'+count+'option1" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input"/><input style="width:30%" type="text" placeholder="Option 1" id="q'+count+'option1" name="q'+count+'option1" class="form-control"/><input type="radio" name="radioq'+count+'"  id="radioq'+count+'option2" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input"/><input style="width:30%" type="text" placeholder="Option 2" id="q'+count+'option2" name="q'+count+'option2" class="form-control"/><input type="radio" name="radioq'+count+'"  id="radioq'+count+'option3" style="float:left; margin-right: 1vw; margin-left:1vw;" class="form-check-input"/><input style="width:30%" type="text" placeholder="Option 3" id="q'+count+'option3" name="q'+count+'option3" class="form-control"/><br/>';

quizform.innerHTML = current + question;
count += 1;
}
*/

var add = document.getElementById("addQuestion");
var quiz = document.getElementById("quizForm");

add.addEventListener('click', function () {
var input = document.createElement('input')
input.type = "text";
input.placeholder = "new";
quiz.appendChild(input);
quiz.innerHTML += '<input type="text" placeholder="new"/>';
}); 
