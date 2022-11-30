    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // PROFILE DOCUMENTS FORMS
            $(".showUpdateProfile").click(function() {
                var updateid = this.value;
                $("#updateProfile").load("submit.php", {
                    updateID: updateid
                })
            })
            $(".showArchiveProfile").click(function() {
                var archiveid = this.value;
                $("#archiveProfile").load("submit.php", {
                    archiveID: archiveid
                })
            })
            $(".viewRestoreProfile").click(function() {
                var restoreid = this.value;
                $("#restoreProfile").load("submit.php", {
                    restoreID: restoreid
                })
            // USERACCOUNT DOCUMENT FORMS
            })
            $(".showUpdateAccount").click(function() {
                var accountid = this.value;
                $("#updateAccount").load("submit.php", {
                    accountID: accountid
                })
    
            })
        })
    </script>