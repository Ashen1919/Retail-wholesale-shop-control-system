<div class="account-container">
  <h1>Account Information</h1>
  <form>
    <div class="form-group">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" value="<?= htmlspecialchars($row['fullName']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" value="<?= htmlspecialchars($row['email']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" value="<?= htmlspecialchars($row['phone']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" value="<?= htmlspecialchars($row['address']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" id="gender" value="<?= htmlspecialchars($row['gender']) ?>" readonly>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" value="********" readonly>
    </div>
    <div class="buttons">
      <button type="button" class="edit">Edit</button>
      <button type="button" class="logout">Log Out</button>
      <button type="button" class="delete">Delete Account</button>
    </div>
  </form>
</div>
