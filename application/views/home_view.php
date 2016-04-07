<!--<div id="desktop-content">-->
<div class="container-fluid">
    <div id="desktop-content">
    <div class="jumbotron">
        <h1>Servare</h1>

            <?php
            if ($this->session->userdata('id')) { ?>
                <p>
                    Welcome Back, <strong><?php echo $this->session->userdata('username'); ?></strong>
                </p>
                <?php
            } else { ?>
                <p>
                    Welcome to <strong>Servare</strong> A useful tool to help you keep track of all your savings
                    accounts all under one roof.
                </p>
                <p>We are very secure due to the fact that we do not ask for any of your account numbers or details.
                    All we need is your monthly deposits, how much interest you get, the date of your first
                    deposit and for you to name the account <em>(this could be Big Bobs Savings)</em>. Once we have
                    these you can
                    track the growth of the account, the total interest earned and how long you have left to account
                    maturity.
                </p>
                <p>
                    It really is that easy, and the good news is that once you add all your accounts (and given them
                    wacky names) we will give you the total balance of all your accounts !.
                </p>
                <?php
            }
            ?>
            <p>
                You can view the total sum of all your savings combined either on your <?php
                if ($this->session->userdata('id')) { ?>
                    <?php echo anchor('members', 'Dashboard'); ?>
                    <?php
                } else { ?>
                    <?php echo "<strong>dashboard</strong>" ?>
                    <?php
                }
                ?> or go to
                <?php
                if ($this->session->userdata('id')) { ?>
                    <?php echo anchor('profile', 'Account Overview'); ?>
                    <?php
                } else { ?>
                    <?php echo "<strong>account overview</strong>" ?>
                    <?php
                }
                ?>
                for a more comprehensive breakdown
            </p>
            <p>
                You can use us on any devise be it your tablet, your smart phone or on your desktop.
                We give different information depending on what device you are viewing on !
            </p>
        </div>
        <p>
            <?php
            if ($this->session->userdata('id')) { ?>
                <a class="btn btn-lg btn-primary" <?php echo anchor('banks', 'Add A New Account &raquo;'); ?> </a>
                <?php
            } else { ?>
                <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>
                <?php
            }
            ?>
        </p>
    </div>
    <div id="mobile-content">
        <h1> Welcome to Servare</h1>
        <hr>
        </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-4">
            <h2>My Dashboard</h2>
            <p>Use <strong>your dashboard</strong> to see an overview of all your personal information and total
                balance.
                Within <strong>your dashboard</strong> you can also edit your personal information.
                In <strong>your dashboard</strong> we will also feed you updates on new features that are under
                development.
            </p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('members', 'My Dashboard &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>
                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Accounts Overview</h2>
            <p>In <strong>accounts overview</strong> we show you all the information about your accounts. We show you
                your total interest so far, your interest rate, your account balance so far, when you made your first
                deposit, how much you deposit each month and how long till account maturity as well as plenty of other
                cool stuff.</p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('profile', 'My Account Overview &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Add New Accounts</h2>
            <p>Within this section we give you the ability to add as many savings accounts as you have<span>*(At the moment we only offer Regular Savings Accounts)</span>.
                As soon as you
                add a new account <strong>your dashboard</strong> and <strong>account overview</strong> are dynamical
                updated without you doing a thing, how cool is that !</p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('banks', 'Add Regular Savings &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
    </div>
</div>