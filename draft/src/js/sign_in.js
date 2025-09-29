export function initAuthModal() {
    const authModal = document.getElementById('auth-modal');
    const openModalBtn = document.getElementById('open-auth-modal');
    const closeModalBtn = document.getElementById('close-auth-modal');

    if (!authModal || !openModalBtn || !closeModalBtn) return;

    openModalBtn.addEventListener('click', () => {
        authModal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', () => {
        authModal.classList.add('hidden');
    });

    window.addEventListener('click', (event) => {
        if (event.target === authModal) {
            authModal.classList.add('hidden');
        }
    });

    document.getElementById('open-auth-modal-mobile')?.addEventListener('click', () => {
        authModal.classList.remove('hidden');
    });
}