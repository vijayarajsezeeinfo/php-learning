<form method="post" action="<?= base_url('register') ?>">
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label>Age</label>
        <input type="text" name="age" id="age">
    </div>
    <div>
        <label>Gender</label>
        <input type="radio" name="gender" id="male" value="male">
        <label>Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label>Female</label>
    </div>
    <div>
        <label>Skills</label>
        <input type="checkbox" name="java" id="java" value="java">
        <label>Java</label>
        <input type="checkbox" name="sql" id="sql" value="sql">
        <label>SQL</label>
        <input type="checkbox" name="php" id="php" value="php">
        <label>PHP</label>
    </div>
    <input type="submit" value="submit">
</form>

<?php if (isset($name)): ?>

    <div class="card">
        <h2>User Details</h2>

        <p><strong>Name:</strong> <?= esc($name) ?></p>
        <p><strong>Age:</strong> <?= esc($age) ?></p>
        <p><strong>Gender:</strong> <?= esc($gender) ?></p>

        <p><strong>Skills:</strong></p>

        <ul>
            <?php if (!empty($java)): ?>
                <li>Java</li>
            <?php endif; ?>

            <?php if  (!empty($sql)): ?>
                <li>SQL</li>
            <?php endif; ?>

            <?php if  (!empty($php)): ?>
                <li>PHP</li>
            <?php endif; ?>
        </ul>
    </div>

<?php endif; ?>