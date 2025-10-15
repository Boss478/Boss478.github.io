/*
import mysql from 'mysql2/promise';

// Database connection configuration
const dbConfig = {
    host: 'localhost',
    user: 'boss',
    password: '',
    database: 'website_2'
};

// Create database connection pool
const pool = mysql.createPool(dbConfig);
*/

export async function loadComponents() {
    // Component loader
    try {
        const responses = await Promise.all([
            fetch('../header.html'),
            fetch('../footer.html'),
            fetch('../backtotop.html'),
            fetch('../sign_in_modal.html')
        ]);

        const [header, footer, backToTop, signInModal] = await Promise.all(
            responses.map(res => res.text())
        );

        document.getElementById('header-container').innerHTML = header;
        document.getElementById('footer').innerHTML = footer;
        document.getElementById('backtotop-container').innerHTML = backToTop;
        document.getElementById('auth-modal-container').innerHTML = signInModal;

        // Initialize components after loading
        initializeHeader();
        initBackToTop();
        initSignInModal();
    } catch (error) {
        console.error('Error loading components:', error);
    }
}

export function initializeHeader() {
    // Header initialization
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const headerDivs = document.querySelectorAll('#header-bubble');
    const signinBtns = document.querySelectorAll('#signin-btn');
    const modal = document.getElementById('auth-modal');
    const modalContent = document.getElementById('modal-content');
    
    // Mobile menu toggle
    menuToggle?.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        requestAnimationFrame(() => {
            mobileMenu.classList.toggle('opacity-0');
            mobileMenu.classList.toggle('scale-95');
            mobileMenu.classList.toggle('opacity-100');
            mobileMenu.classList.toggle('scale-100');
        });
    });

    // Modal functionality
    signinBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (modal && modalContent) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modalContent.classList.remove('opacity-0', 'scale-95');
                    modalContent.classList.add('opacity-100', 'scale-100');
                }, 10);
            }
        });
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('hidden', 'opacity-0', 'scale-95');
        }
    }, { passive: true });

}

export function initBackToTop() {
    // Back to top functionality
    const backToTopButton = document.getElementById('backToTop');
    if (!backToTopButton) return;

    const handleScroll = () => {
        const shouldShow = window.scrollY > 150;
        backToTopButton.classList.toggle('opacity-0', !shouldShow);
        backToTopButton.classList.toggle('invisible', !shouldShow);
        backToTopButton.classList.toggle('opacity-100', shouldShow);
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

export function initSignInModal() {
    
    const modal = document.getElementById('auth-modal');
    const modalContent = document.getElementById('modal-content');
    const modalBackdrop = document.getElementById('modal-backdrop');
    const openModalButtons = document.querySelectorAll('[id^="signin-btn"], [id^="open-auth-modal"]');
    const closeModalButton = document.getElementById('close-auth-modal');
    const emailForm = document.getElementById('auth-email-form');
    const passwordForm = document.getElementById('auth-password-form');
    const emailStep = document.getElementById('auth-step-email');
    const passwordStep = document.getElementById('auth-step-password');
    const emailDisplay = document.getElementById('auth-email-display');
    const backToEmailButton = document.getElementById('auth-back-email');
    const email_warning_text = document.getElementById('auth-email-warning');
    
    if (!modal || !modalContent || !closeModalButton || !modalBackdrop || !emailForm || !passwordForm) {
        /* console.log('Modal elements not found:', {
            modal: !!modal,
            modalContent: !!modalContent,
            closeButton: !!closeModalButton,
            backdrop: !!modalBackdrop,
            emailForm: !!emailForm,
            passwordForm: !!passwordForm
        }); */
        return;
    }

    const openModal = (e) => {
        e.preventDefault();
        document.body.style.overflow = 'hidden'; // Prevent scrolling
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('opacity-0', 'scale-95');
            modalContent.classList.add('opacity-100', 'scale-100');
        }, 10);
    };

    let closeModal = () => {
        modalContent.classList.remove('opacity-100', 'scale-100');
        modalContent.classList.add('opacity-0', 'scale-95');
        email_warning_text.textContent = '';
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = ''; // Re-enable scrolling
        }, 300);
    };

    // Event Listeners
    openModalButtons.forEach(button => {
        //console.log('Adding click listener to button:', button.id);
        button.addEventListener('click', openModal);
    });
    
    closeModalButton.addEventListener('click', closeModal);
    
    modalBackdrop.addEventListener('click', (e) => {
        // Close when clicking directly on the backdrop
        if (e.target === modalBackdrop) {
            closeModal();
        }
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Handle email form submission
    const email_button = document.getElementById('auth-email-confirm');
    email_button.addEventListener('click', (e) => {
        e.preventDefault();
        const email = document.getElementById('auth-email').value;
        
        if (email && email.includes('@')) {
            // Show email in password step
            email_warning_text.textContent = '';
            emailDisplay.textContent = email;
            
            // Hide email step and show password step with animation
            emailStep.classList.add('opacity-0');
            setTimeout(() => {
                emailStep.classList.add('hidden');
                passwordStep.classList.remove('hidden');
                requestAnimationFrame(() => {
                    passwordStep.classList.remove('opacity-0');
                });
            }, 150);
            
            // Focus password input
            setTimeout(() => {
                document.getElementById('auth-password').focus();
            }, 200);
        } else {
            // Show error message
            email_warning_text.textContent = '* กรุณากรอกอีเมลที่ถูกต้อง';
        }
    });

    // Handle password form submission
    passwordForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const email = document.getElementById('auth-email').value;
        const password = document.getElementById('auth-password').value;
        
        // Here you would typically make an API call to verify credentials
        console.log('Login attempt:', { email, password });
        
        // For demo, just show success and close modal
        alert('เข้าสู่ระบบสำเร็จ!');
        closeModal();
    });

    // Handle back button in password step
    backToEmailButton.addEventListener('click', () => {
        // Hide password step and show email step with animation
        passwordStep.classList.add('opacity-0');
        setTimeout(() => {
            passwordStep.classList.add('hidden');
            emailStep.classList.remove('hidden');
            requestAnimationFrame(() => {
                emailStep.classList.remove('opacity-0');
            });
        }, 150);
        
        // Focus email input
        setTimeout(() => {
            document.getElementById('auth-email').focus();
        }, 200);
    });

    // Reset form when modal is closed
    const resetForm = () => {
        emailForm.reset();
        passwordForm.reset();
        emailStep.classList.remove('hidden', 'opacity-0');
        passwordStep.classList.add('hidden', 'opacity-0');
    };

    // Add reset to close modal function
    const originalCloseModal = closeModal;
    closeModal = () => {
        originalCloseModal();
        setTimeout(resetForm, 300);
    };
};