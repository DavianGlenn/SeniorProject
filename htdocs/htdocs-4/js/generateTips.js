var educationTips = [
    'Become close with your professors they can provide opportunities for you and even speak on your behalf.','Aknowledge your professor when they enter the room!','Create a group chat with a few students to hold eachother accountable for passing the class!'
]

var careerTips = [
    'Build your resume for the job that you want specifically.','Do your research on the company before going into the interview.', 'find out what alumn work at the comapny you want to work for!'
]
var socialTips = [
    'Get out and talk to someone new.', 'Be nice and open to new conversations!', 'email your buddy!', 'Use social media as a platform to engage with new people.', 'Take some time to talk to that classmate you sit next to!', 'There are thousands of people on campus and atleast half of them would like to be your friend!', 'Be confident!'
]


function generateNew(){
    var randomNumber = Math.floor(Math.random() * (educationTips.length));
    document.getElementById('educationTip').innerHTML = educationTips[randomNumber];
    document.getElementById('careerTip').innerHTML = careerTips[randomNumber];
    document.getElementById('socialTip').innerHTML = socialTips[randomNumber];
}