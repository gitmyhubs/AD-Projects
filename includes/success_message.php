<?php if (isset($_SESSION['success_message'])): ?>
    <div id="success-message" class="success-message">
        <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'block'; // Show the success message
                setTimeout(function() {
                    successMessage.style.display = 'none'; // Hide after 3 seconds
                }, 3000);
            }
        });
    </script>
<?php endif; ?>
