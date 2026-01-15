<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ProfileInfoCard from "@/Components/Profile/ProfileInfoCard.vue";
import ContactInfoCard from "@/Components/Profile/ContactInfoCard.vue";
// import SecurityCard from "@/Components/Profile/SecurityCard.vue";
import PasswordCard from "@/Components/Profile/PasswordCard.vue";
import DangerZoneCard from "@/Components/Profile/DangerZoneCard.vue";
</script>

<template>
    <AuthenticatedLayout title="Manage your Profile">
        <div class="max-w-4xl mx-auto space-y-6 py-6">

            <ProfileInfoCard />
            <ContactInfoCard />
            <!-- <SecurityCard /> -->
            <PasswordCard />
            <DangerZoneCard />
        </div>
    </AuthenticatedLayout>
</template>
