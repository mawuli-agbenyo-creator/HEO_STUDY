</div>
</main>
</div>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search");
        const table = document.getElementById("studentTable");
        const rows = table.querySelectorAll("tbody tr");

        searchInput.addEventListener("input", function () {
            const searchTerm = searchInput.value.toLowerCase();

            rows.forEach(function (row) {
                const nameColumn = row.querySelector("td:first-child");
                const name = nameColumn.textContent.toLowerCase();

                if (name.includes(searchTerm)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });


    // Add this script to your existing JavaScript or link a new script file

document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-btn');

    viewButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.dataset.userId;

            // AJAX request
            fetch(`/user/${userId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data.user.full_name);
                    // Fill modal fields with the retrieved user data
                    // Example: Assuming you have modal fields with IDs like "modalName", "modalEmail", etc.
                    document.getElementById('full_name').value = data.user.full_name;
                    document.getElementById('email').value = data.user.email;
                    document.getElementById('phone').value = data.user.mobile_number;
                    document.getElementById('university').value = data.user.university;
                    document.getElementById('level').value = data.user.level;
                    document.getElementById('course').value = data.user.course;
                    // Add more lines for other fields as needed
                })
                .catch(error => console.error('Error:', error));
        });
    });
});

</script>

</html>


