function setYear() {
    const yearElement = document.getElementById("year");
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
}


async function setGithubRepos() {
    const username = 'sagastvme';
    const ol = document.getElementById('listOfRepos');

    try {
        const response = await fetch(`https://api.github.com/users/${username}/repos`);
        const repos = await response.json();

        ol.innerHTML = ''; // Clear existing content if any

        repos.forEach(repo => {
            // Create necessary elements
            const detailsElement = document.createElement('details');
            const summaryElement = document.createElement('summary');
            const summaryContent = document.createElement('span');
            const repoImage = document.createElement('img');
            const repoDescription = document.createElement('p');
            const repoLink = document.createElement('a');
            const listItem = document.createElement('li');

            // Set attributes and styling for each element
            summaryElement.style.cursor = 'pointer';
            summaryElement.style.padding = '0.5rem 0';
            summaryElement.style.fontWeight = 'bold';
            summaryElement.style.display = 'flex'; // Ensure arrow alignment
            summaryElement.style.alignItems = 'center';

            summaryContent.style.display = 'inline-flex';
            summaryContent.style.alignItems = 'center';

            repoImage.src = `https://raw.githubusercontent.com/${username}/${repo.name}/main/img/icon_for_my_website.jpg`;
            repoImage.alt = `${repo.name} icon`;
            repoImage.style.width = '40px';
            repoImage.style.height = '40px';
            repoImage.style.marginRight = '10px';
            repoImage.style.borderRadius = '5px';

            repoDescription.textContent = repo.description || 'No description available.';
            repoDescription.style.fontSize = '0.9rem';
            repoDescription.style.margin = '0.5rem 0';
            repoDescription.style.lineHeight = '1.4';

            repoLink.href = repo.html_url;
            repoLink.textContent = 'View Repository';
            repoLink.target = '_blank';
            repoLink.rel = 'noopener noreferrer';
            repoLink.style.fontSize = '0.9rem';
            repoLink.style.fontStyle = 'italic';
            repoLink.style.textDecoration = 'underline';
            repoLink.style.padding = '0.3rem 0';

            // Nest elements together
            summaryContent.appendChild(repoImage);
            summaryContent.appendChild(document.createTextNode(repo.name));

            summaryElement.appendChild(summaryContent);

            detailsElement.appendChild(summaryElement);
            detailsElement.appendChild(repoDescription);
            detailsElement.appendChild(repoLink);

            listItem.appendChild(detailsElement);
            listItem.style.listStyle = 'none';
            listItem.style.padding = '0.5rem 0';
            listItem.style.borderBottom = '1px solid #ddd';

            ol.appendChild(listItem);
        });
    } catch (error) {
        console.error('Error fetching repositories:', error);
        ol.innerHTML = '<li>Could not load repositories.</li>';
    }
}


function setReactiveData(){
    setYear()
    setGithubRepos()
}