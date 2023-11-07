</div>
</div>
</div>
<footer class="footer container mt-auto py-1">
<div
	class="d-sm-flex justify-content-center ">
	<span
		class="text-muted d-block text-center text-sm-left d-sm-inline-block">No
		Copyright © Open Source <script>
			document.write(new Date().getFullYear())
		</script>
	</span> 
</div>
</footer>
<div id="loading" class="spinner-border text-primary align-middle"
role="status"></div>

<button class="btn btn-sm btn-primary rounded-circle"
		onclick="scrollToTopFunction()" id="scrollToTop" title="Scroll to top">
		<i data-feather="arrow-up-circle"></i>
	</button>

<script src="assests/js/feather.min.js"></script>
<script src="assests/js/bootstrap.bundle.min.js"></script>

<script src="assests/js/script.js"></script>
<script src="assests/js/script4.js"></script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {
	feather.replace();
});
</script>
<script src="assests/js/jspdf.min.js"></script>
<script>
function onClick() {
	var pdfExport = new jsPDF('p', 'pt', 'a4');
	var htmlTableContent = document.getElementById("tableContent");
	pdfExport.fromHTML(htmlTableContent);
	pdfExport.save('tableData.pdf');
};

var element = document.getElementById("exportToPDF1");
element.addEventListener("click", onClick);
</script>
<script>
function showTableData() {
	var oTable = document.getElementById('finTable');
	var rowLength = oTable.rows.length;
	for (i = 0; i < rowLength; i++) {
		var oCells = oTable.rows.item(i).cells;
		var cellLength = oCells.length;
		for (var j = 0; j < cellLength; j++) {
			var cellVal = oCells.item(j).innerHTML;
			//alert(cellVal);
		}
	}
}
</script>

<script type="text/javascript">
document.getElementById('finTable').addEventListener('click',
		function(item) {
			var row = item.path[1];
			var row_value = "";
			for (var j = 0; j < row.cells.length; j++) {
				row_value += row.cells[j].innerHTML;
				row_value += " | ";
			}

			//alert(row_value);
			var pdfExport = new jsPDF('p', 'pt', 'a4');
			pdfExport.fromHTML(row_value);
			pdfExport.save(row_value.split('|')[0].trim() + '.pdf');

			if (row.classList.contains('highlight'))
				row.classList.remove('highlight');
			else
				row.classList.add('highlight');
		});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatBox = document.querySelector('.chat-assistant');
        const chatInput = document.getElementById('chatInput');
        const sendChat = document.getElementById('sendChat');
        const closeChat = document.getElementById('closeChat');

        // Function to toggle chat box visibility
        closeChat.addEventListener('click', function () {
            chatBox.style.display = 'none';
        });

        // Function to send a chat message (you can customize this part)
        sendChat.addEventListener('click', function () {
            const message = chatInput.value;
            if (message.trim() !== '') {
                const chatMessage = document.createElement('div');
                chatMessage.className = 'chat-message';
                chatMessage.textContent = message;
                document.querySelector('.chat-body').appendChild(chatMessage);
                chatInput.value = '';
            }
        });
    });
</script>
<script>
    // JavaScript to toggle the sidebar on small screens
    $(document).ready(function () {
        $("#sidebarCollapseSmall").on("click", function () {
            $("#sidebar").toggleClass("active");
        });
    });
</script>
</body>

</html>