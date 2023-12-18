let portfolioAll;

document.addEventListener('DOMContentLoaded', () => {
    portfolioAll = document.querySelector('.portfolio__all');
    portfolioAll.style.display = 'none';
});

const showMorePortfolio = () => {
    const portfolioTop = document.querySelector('.portfolio__top');

    portfolioTop.style.display = 'none';
    portfolioAll.style.display = 'block';
    portfolioAll.style.visibility = 'visible';
}
