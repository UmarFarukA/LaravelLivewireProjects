import '../css/app.css'
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import GuestLayout from '@/Layouts/GuestLayout'
import ApplicantLayout from '@/Layouts/ApplicantLayout';
import AuthLayout from '@/Layouts/AuthLayout';
import ApplicationLayout from '@/Pages/Applicant/ApplicationLayout';

createInertiaApp({

    resolve: name => {

    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    const page = pages[`./Pages/${name}.jsx`]

        if (!page) {
            console.error(`Page not found: ./Pages/${name}.jsx`)
            return
        }

        // 🔥 NESTED LAYOUT SYSTEM

        if (name.startsWith('Applicant/Application/')) {
            page.default.layout = page => (
                <ApplicantLayout>
                    <ApplicationLayout>
                        {page}
                    </ApplicationLayout>
                </ApplicantLayout>
            )
        }

        else if (name.startsWith('Applicant/')) {
            page.default.layout = page => (
                <ApplicantLayout>{page}</ApplicantLayout>
            )
        }

        else if (name.startsWith('Auth/')) {
            page.default.layout = page => (
                <AuthLayout>{page}</AuthLayout>
            )
        }

        else {
            page.default.layout = page => (
                <GuestLayout>{page}</GuestLayout>
            )
        }

        return page
    },

    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />)
    },
})
