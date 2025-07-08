<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="user-status" content="{{ Auth::user()->status_pengguna }}">
    <title>@yield('title', 'SPARKLE')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="text-white">
    @yield('content')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Logout Modal
            const logoutButton = document.getElementById('logoutButton');
            const logoutModal = document.getElementById('popup-modal');
            const cancelLogoutButton = document.getElementById('cancelLogout');

            logoutButton?.addEventListener('click', () => {
                logoutModal.classList.remove('hidden');
            });

            cancelLogoutButton?.addEventListener('click', () => {
                logoutModal.classList.add('hidden');
            });

            // Zone Elements
            const zoneElements = document.querySelectorAll('[data-modal-target]');
            const cancelZoneButtons = document.querySelectorAll('.cancel-zona');

            // Function to check zone access
            function checkZoneAccess(zoneNumber) {
                const userStatus = document.querySelector('meta[name="user-status"]')?.getAttribute('content')?.toLowerCase() || '';
                console.log('User Status:', userStatus); // Debugging
                console.log('Zone Number:', zoneNumber); // Debugging

                if ((zoneNumber === 4 || zoneNumber === 6) && userStatus === 'mahasiswa') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Akses Ditolak',
                        text: 'Maaf, Anda tidak memiliki akses ke zona ini.',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    });
                    return false;
                }
                return true;
            }

            // Handle zone clicks
            zoneElements.forEach(element => {
                element.addEventListener('click', (e) => {
                    const modalId = element.getAttribute('data-modal-target');
                    const zoneNumber = parseInt(modalId.split('-').pop());

                    if (!checkZoneAccess(zoneNumber)) {
                        e.preventDefault();
                        return;
                    }

                    const modal = document.getElementById(modalId);
                    if (modal) {
                        modal.classList.remove('hidden');
                    }
                });
            });

            // Handle cancel buttons
            cancelZoneButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modal = button.closest('[id^="modal-zona-"]');
                    if (modal) {
                        modal.classList.add('hidden');
                    }
                });
            });

            // Close modals on outside click
            window.addEventListener('click', (event) => {
                if (event.target.id === 'popup-modal') {
                    logoutModal.classList.add('hidden');
                }

                const zoneModals = document.querySelectorAll('[id^="modal-zona-"]');
                zoneModals.forEach(modal => {
                    if (event.target === modal) {
                        modal.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>
