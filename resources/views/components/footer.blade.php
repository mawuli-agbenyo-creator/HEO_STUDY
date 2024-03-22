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
                    document.getElementById('nationality').value = data.user.nationality;
                    // Add more lines for other fields as needed
                })
                .catch(error => console.error('Error:', error));
        });
    });
});

</script>



<!-- Add this script at the end of your HTML file or in a separate script file -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const table = document.getElementById("studentTable");
      const rows = Array.from(table.querySelectorAll("tbody tr"));
      const itemsPerPage = 5; // Set the number of items to display per page
  
      let currentPage = 1;
  
      function showPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
  
        rows.forEach((row, index) => {
          row.style.display = index >= startIndex && index < endIndex ? "" : "none";
          
        });
        updatePageInfo();
      }
  
      function updatePaginationButtons() {
        const totalPages = Math.ceil(rows.length / itemsPerPage);
  
        const paginationContainer = document.querySelector(".pagination");
        paginationContainer.innerHTML = "";
  
        for (let i = 1; i <= totalPages; i++) {
          const button = document.createElement("button");
          button.textContent = i;
          button.classList.add("px-3", "py-1", "rounded-md", "focus:outline-none", "focus:shadow-outline-purple");
  
          if (i === currentPage) {
            button.classList.add("text-white", "bg-purple-600");
          } else {
            button.addEventListener("click", () => {
              currentPage = i;
              showPage(currentPage);
              updatePaginationButtons();
            });
          }
  
          paginationContainer.appendChild(button);
        }
      }

      function updatePageInfo() {
      const pageInfo = document.getElementById("page-info");
      pageInfo.textContent = `Showing ${Math.min((currentPage - 1) * itemsPerPage + 1, rows.length)}-
        ${Math.min(currentPage * itemsPerPage, rows.length)} of ${rows.length}`;
    }
  
      showPage(currentPage);
      updatePaginationButtons();
    });
  </script>
  

</html>


