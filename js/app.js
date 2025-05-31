document.getElementById('formulario').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const loader = document.querySelector(".loader");
    const btn = document.getElementById('btn-login');
    btn.style.display='none';
    loader.style.display='block';

    setTimeout(() => {
        btn.style.display = 'block';
        loader.style.display='none';
        this.submit(); 
    }, 2000);
});

