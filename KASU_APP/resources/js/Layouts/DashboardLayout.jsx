import ApplicantLayout from '@/Layouts/ApplicantLayout'

function DashboardLayout({ children }) {
    return (
        <ApplicantLayout>
            <div className="grid grid-cols-12 gap-6">
                {children}
            </div>
        </ApplicantLayout>
    )
}

export default DashboardLayout
