function setYear() {
    const yearElement = document.getElementById("year");
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
}

function setGithubRepos(){
    let ol = document.getElementById('listOfRepos');
}



function setReactiveData(){
    setYear()
}