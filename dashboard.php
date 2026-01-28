* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Arial, sans-serif;
}

body {
    background-color: #f4f6f8;
}

/* Topbar */
header {
    background-color: #b71c1c;
    color: white;
    padding: 18px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 22px;
}

.user {
    font-size: 14px;
}

.logout {
    margin-left: 15px;
    color: white;
    text-decoration: none;
    background: rgba(255,255,255,0.2);
    padding: 6px 12px;
    border-radius: 5px;
}

.logout:hover {
    background: rgba(255,255,255,0.35);
}

/* Cards */
main {
    padding: 40px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}

.card {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-6px);
}

.card i {
    font-size: 40px;
    margin-bottom: 15px;
}

.card h3 {
    margin-bottom: 5px;
}

/* Cores */
.red i { color: #b71c1c; }
.orange i { color: #f57c00; }
.green i { color: #2e7d32; }
.gray i { color: #616161; }
