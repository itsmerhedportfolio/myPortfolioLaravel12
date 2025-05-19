<div id="sidebar" class="sidebar bg-red-500 text-white h-screen transition-all duration-300 ease-in-out overflow-hidden;" isFalse="t">

    <button onclick="toggleSidebar()" class="p-4">
        <i class="bi bi-list text-2xl" id="menu-icon" style="font-size: 2rem;"></i>
    </button>
        <ul class="flex space-x-2 grid grid-cols" id="nav-links" style="opacity: 1; pointer-events: auto;">
            <li><a href="#" >Information</a></li>
            <li><a href="#" >Project</a></li>
            <li><a href="#" >Contact</a></li>
            <li><a href="#" >Collaboration</a></li>
           
        </ul>
<style>
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        background-color: #f8f9fa;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        
   
    }

    ul {
        margin-top: 50px;
    }

    li {
        list-style: none;
        margin-top: 20px;
        padding: 5px;
    }
    a {
        font-size: 1.3rem;
        font-family: ;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        color: black;
        margin: 5px;
    }

</style>
<script>
    let isCollapsed = false;
 
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const navLinks = document.getElementById('nav-links');
        const menuicon = document.getElementById('menu-icon');

        if (isCollapsed) {
            // Expand
            sidebar.style.width = '200px';
            navLinks.style.opacity = '1';
            navLinks.style.pointerEvents = 'auto';
            sidebar.style.visibility = 'visible';
            menuicon.style.color = "black";
            menuicon.style.fontSize = "1.5rem";
        } else {
            // Collapse
            sidebar.style.visibility = 'hidden';
            menuicon.style.visibility = "visible";
            menuicon.style.color = "white";
            navLinks.style.opacity = '0';
            navLinks.style.pointerEvents = 'none';
        }

        isCollapsed = !isCollapsed;
    }


    document.getElementById('menuicon').addEventListener('click', toggleSidebar);
    
    
</script>
</div>
</div>

