<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html> 
<body style='background-color:#070707;align-content: center;'>
    <style>
        .navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: #070707;
    color: #F7DC5F;
}
.brand-title {
    font-size: 1.5rem;
    margin-left: 4.5rem;
}
.navbar-links {
    height: 100%;
}
.navbar-links ul {
    display: flex;
    margin-right: 50px;
    padding: 0;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: #F7DC5F;
    padding: 1rem;
}

.navbar-links li:hover {
    background-color: #555;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: -3rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: white;
    border-radius: 10px;
}
table {
    border-collapse: collapse;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    color: black;
}
  
th, td {
    text-align: left;
    padding: 18px;
    height: 10px;
    text-align:center;
}
  
tr:nth-child(even) {background-color: #1e2c3b;}
.button {
        transition-duration: 0.4s;
        border:0px;
        height:35px;
        width:100px;
        background-color: #1e2c3b; 
        border-radius:8px;
        
}

.button:hover {
        background-color: black;
        color: white;
}

@media (max-width: 800px) {
  .brand-title{
    color: #F7DC5F;
  }
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        margin-left:30px ;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
    
}
    </style>
    <nav class="navbar">
            <div class="brand-title">WC4U</div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.html"> HOME</a></li>
                    <li><a href="index.html#events">EVENT</a></li>
                    <li><a href="index.html#donate">DONATE</a></li>
                    <li><a href="index.html#contact">CONTACT</a></li>
                    <li><a href="login.html">ADMIN</a></li>
                </ul>
            </div>
        </nav>
    <header>
        <h1 style='text-align: center;color: #F7DC5F;'>About Our Admins</h1>
    </header>
      <table border="0" >
    <tr bgcolor="#F2F3F4" padding="5px">
      <th style="text-align:center">Name</th>
      <th style="text-align:center">Age</th>
      <th style="text-align:center">Email</th>
      <th style="text-align:center">Phone No</th>
      <th style="text-align:center">Designation</th>
    </tr>
    <xsl:for-each select="admin/admininfo">
    <tr>
      <td style='color: #F7DC5F;'><xsl:value-of select="name"/></td>
      <td style='color: #F7DC5F;'><xsl:value-of select="age"/></td>
      <td style='color: #F7DC5F;'><xsl:value-of select="email"/></td>
      <td style='color: #F7DC5F;'><xsl:value-of select="phno"/></td>
      <td style='color: #F7DC5F;'><xsl:value-of select="designation"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
