document.getElementById("loadMore").addEventListener("click", function () {
    const contentArea = document.getElementById("pengetahuan-container");
    for (let i = currentIndex; i < currentIndex + 9 && i < allContents.length; i++) {
        const col = document.createElement("div");
        col.className = "col-md-4 mb-4";
        col.innerHTML = `
            <div class="card">
                <img src="${allContents[i].image}" class="card-img-top" alt="${allContents[i].title}">
                <div class="card-body">
                    <h5 class="card-title">${allContents[i].title}</h5>
                    <p class="card-text">${allContents[i].description}</p>
                </div>
            </div>`;
        contentArea.appendChild(col);
    }
    currentIndex += 9;
    if (currentIndex >= allContents.length) {
        this.style.display = "none";
    }
});
