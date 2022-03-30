const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
    const title = form.getAttribute('data-title');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const conf = confirm(`Are you sure to delete ${title}?`);
        if (conf) e.target.submit();
    });
});