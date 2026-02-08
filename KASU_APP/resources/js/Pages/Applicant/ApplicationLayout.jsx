import StageSidebar from '@/Components/StageSidebar'
import DashboardLayout from '@/Layouts/DashboardLayout'

function ApplicationLayout({ application, stages, children }) {
    return (
        <DashboardLayout>
            <div className="flex gap-6">
                {/* Sidebar */}
                <StageSidebar
                    stages={stages}
                    application={application}
                />

                {/* Main Content */}
                <div className="flex-1 bg-white border rounded-lg p-6">
                    {children}
                </div>
            </div>
        </DashboardLayout>
    )
}

// ApplicationLayout.layout = (page) => (
//     <DashboardLayout>
//         {page}
//     </DashboardLayout>
// );

export default ApplicationLayout
