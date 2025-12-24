<script setup lang="ts">
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { dashboard } from '@/routes';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import {
    LayoutGrid, BookmarkCheck,
    School, Banknote,
    DoorOpen, UsersRound,
    Users,
    //Mail,
    FileText, ChartLine,
    University,
    //Warehouse
} from 'lucide-vue-next';
import AppLogo from './AppLogo.vue';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: dashboard(),
        icon: LayoutGrid,
    },

    {
        'title': 'Manage Schools',
        'href': '/schools',
        'icon': University,
    },

    // {
    //     'title': 'My Classes',
    //     'href': '/classes',
    //     'icon': Warehouse,
    // },

    {
        'title': 'Admissions',
        'href': '/admission',
        'icon': DoorOpen,
    },
    {
        'title': 'Staff',
        'href': '/staff',
        'icon': UsersRound,
    },
    {
        'title': 'Students',
        'href': '/students',
        'icon': Users,
    },
    {
        'title': 'Attendance',
        'href': '/attendance',
        'icon': FileText,
    },
    {
        'title': 'Academic',
        'href': '/academics',
        'icon': School,
    },
    {
        'title': 'Results & Assessments',
        'href': '/examinations',
        'icon': BookmarkCheck,
    },
    {
        'title': 'Fees & Finance',
        'href': '/fees-payments',
        'icon': Banknote,
    },
    // {
    //     'title': 'Communications',
    //     'href': '/messages',
    //     'icon': Mail,
    // },
    {
        'title': 'Reports & Analytics',
        'href': '/reports',
        'icon': ChartLine,
    }
];

const footerNavItems: NavItem[] = [
    // {
    //     title: 'Github Repo',
    //     href: 'https://github.com/laravel/vue-starter-kit',
    //     icon: Folder,
    // },
    // {
    //     title: 'Documentation',
    //     href: 'https://laravel.com/docs/starter-kits#vue',
    //     icon: BookOpen,
    // },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="dashboard()">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
