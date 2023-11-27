<!-- _datetimepicker.blade.php -->

<div class="container mt-5" style="max-width: 450px">
    <h2 class="mb-4">When</h2>
    <div class="form-group">
        <input type="text" class="form-control" name="when" id="when" />
    </div>
</div>

<!-- Add the flatpickr CSS and JavaScript files -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Initialize flatpickr -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        flatpickr('#when', {
            enableTime: true,
            dateFormat: 'Y-m-d H:i:S',
        });
    });
</script>
