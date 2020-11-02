<script>
    let tmpTotal = 0;
    let count = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
    tmpTotal = count.reduce((previous, currnet) => previous + currnet.amount, 0);
    document.querySelector('.count-items-in-cart').textContent = tmpTotal;
</script>
<script src="/assets/js/app.js"></script>