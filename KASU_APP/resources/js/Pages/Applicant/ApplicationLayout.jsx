import { usePage } from "@inertiajs/react";

import StageSidebar from "@/Components/StageSidebar";

function ApplicationLayout({children }) {

    const { application, stages} = usePage().props;

    return (
        <div className="grid grid-cols-12 gap-6">
            <div className="col-span-3">
                {/* Sidebar */}
                <StageSidebar stages={stages || []} application={application} />
            </div>
            {/* Main Content */}
            <div className="col-span-9">
                <div className="bg-white rounded-lg shadow p-6">{children}</div>
            </div>
        </div>
    );
}

export default ApplicationLayout;
