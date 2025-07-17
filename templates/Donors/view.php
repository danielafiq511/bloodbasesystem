<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donor $donor
 */
?>
<div class="blood-donor-profile">
    <div class="profile-container">
        <!-- Side Navigation -->
        <div class="profile-sidebar">
            <div class="sidebar-header">
                <h4 class="heading"><?= __('Donor Actions') ?></h4>
            </div>
            <nav class="sidebar-nav">
                <?= $this->Html->link(__('Edit Donor'), ['action' => 'edit', $donor->donorID], ['class' => 'nav-item btn-edit']) ?>
                <?= $this->Form->postLink(__('Delete Donor'), ['action' => 'delete', $donor->donorID], 
                    ['confirm' => __('Are you sure you want to delete donor: {0}?', $donor->donorName), 'class' => 'nav-item btn-delete']) ?>
                <?= $this->Html->link(__('List Donors'), ['action' => 'index'], ['class' => 'nav-item btn-list']) ?>
                <?= $this->Html->link(__('New Donor'), ['action' => 'add'], ['class' => 'nav-item btn-new']) ?>
            </nav>
            <div class="blood-type-display" style="background-color: <?= $this->Blood->typeColor($donor->bloodType) ?>">
                <?= h($donor->bloodType) ?>
            </div>
        </div>

        <!-- Main Content -->
        <div class="profile-content">
            <div class="profile-header">
                <h2><?= h($donor->donorName) ?></h2>
                <div class="donor-id">ID: <?= $this->Number->format($donor->donorID) ?></div>
            </div>
            
            <div class="profile-details">
                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="detail-content">
                        <h4><?= __('Personal Information') ?></h4>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('NRIC') ?></span>
                            <span class="detail-value"><?= h($donor->nric) ?></span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('Gender') ?></span>
                            <span class="detail-value"><?= h($donor->gender) ?></span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('Age') ?></span>
                            <span class="detail-value"><?= h($donor->age) ?></span>
                        </div>
                    </div>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="detail-content">
                        <h4><?= __('Contact Information') ?></h4>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('Address') ?></span>
                            <span class="detail-value"><?= h($donor->address) ?></span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('Phone') ?></span>
                            <span class="detail-value"><?= h($donor->phoneNumber) ?></span>
                        </div>
                    </div>
                </div>

                <div class="detail-card blood-info">
                    <div class="detail-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="detail-content">
                        <h4><?= __('Blood Information') ?></h4>
                        <div class="detail-row">
                            <span class="detail-label"><?= __('Blood Type') ?></span>
                            <span class="detail-value blood-type" style="color: <?= $this->Blood->typeColor($donor->bloodType) ?>">
                                <?= h($donor->bloodType) ?>
                            </span>
                        </div>
                        <!-- You could add more blood-related information here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Blood Donor Profile Styles */
.blood-donor-profile {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background-color: #f8f9fa;
    padding: 20px;
}

.profile-container {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.profile-sidebar {
    width: 250px;
    background: #2c3e50;
    color: white;
    padding: 20px;
}

.sidebar-header {
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin-bottom: 20px;
}

.sidebar-header .heading {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
}

.sidebar-nav {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.nav-item {
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

.nav-item i {
    margin-right: 8px;
}

.btn-edit {
    background: #3498db;
}

.btn-edit:hover {
    background: #2980b9;
}

.btn-delete {
    background: #e74c3c;
}

.btn-delete:hover {
    background: #c0392b;
}

.btn-list {
    background: #2ecc71;
}

.btn-list:hover {
    background: #27ae60;
}

.btn-new {
    background: #9b59b6;
}

.btn-new:hover {
    background: #8e44ad;
}

.blood-type-display {
    margin-top: 30px;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    font-size: 24px;
    font-weight: bold;
    color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.profile-content {
    flex: 1;
    padding: 30px;
}

.profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.profile-header h2 {
    margin: 0;
    color: #2c3e50;
    font-size: 28px;
}

.donor-id {
    background: #f1f1f1;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 14px;
    color: #7f8c8d;
}

.profile-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.detail-card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    display: flex;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.detail-icon {
    margin-right: 15px;
    font-size: 24px;
    color: #3498db;
}

.detail-content {
    flex: 1;
}

.detail-content h4 {
    margin-top: 0;
    margin-bottom: 15px;
    color: #2c3e50;
    font-size: 18px;
}

.detail-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dashed #eee;
}

.detail-row:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.detail-label {
    font-weight: 600;
    color: #7f8c8d;
}

.detail-value {
    color: #2c3e50;
}

.blood-info .detail-icon {
    color: #e74c3c;
}

.blood-type {
    font-weight: bold;
}

/* Blood type colors (you would implement this in your helper) */
.blood-type-A { color: #e74c3c; }
.blood-type-B { color: #3498db; }
.blood-type-AB { color: #9b59b6; }
.blood-type-O { color: #2ecc71; }
</style>