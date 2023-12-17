//별점기능
const ratingStars = [...document.getElementsByClassName("rating_star")];
const ratingResult = document.querySelector(".rating_result");

printRatingResult(ratingResult);

function executeRating(stars, result) {
    const starClassActive = "rating_star fas fa-star";
    const starClassUnactive = "rating_star far fa-star";
    const starsLength = stars.length;
    let i;
    stars.map((star) => {
        star.onclick = () => {
            i = stars.indexOf(star);

            if (star.className.indexOf(starClassUnactive) !== -1) {
                printRatingResult(result, i + 1);
                for (i; i >= 0; --i) stars[i].className = starClassActive;
            } else {
                printRatingResult(result, i);
                for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
            }
        };
    });
}

function printRatingResult(result, num = 0) {
    result.textContent = `${num}/5`;
}

executeRating(ratingStars, ratingResult);

//찜버튼
const likeButton = document.querySelector('.like-button');

likeButton.addEventListener('click', function () {
    this.classList.toggle('clicked');

    if (this.classList.contains('clicked')) {
        this.innerHTML = '★ 찜버튼';
    } else {
        this.innerHTML = '☆ 찜버튼';
    }
});