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

const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const openMenu = () => {
    mobileMenu.style.transform = 'scaleX(1)';
    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 200);
}

const closeMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });

    setTimeout(() => {
        mobileMenu.style.transform = 'scaleX(0)';
    }, 200);
}
